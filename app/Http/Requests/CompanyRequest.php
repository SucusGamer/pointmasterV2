<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'status' => ['string', 'required', 'max:255'],
            'description' => ['string', 'required', 'max:255'],
            'email' => ['string', 'required', 'max:255'],
            'cellphone' => ['string', 'required', 'max:50'],
            'phone' => ['string', 'required', 'max:50'],
            'zipCode' => ['string', 'required', 'max:50'],
            'RFC' => ['string', 'required', 'max:50'],
            'country' => ['string', 'required', 'max:255'],
        ];

        if ($this->getMethod() == 'POST') {
            $rules['companyKey'] = ['string', 'required', 'max:5', 'unique:company'];
            $rules['name'] = ['string', 'required', 'max:255'];
            $rules['shortName'] = ['string', 'required', 'max:30'];
        }else{
            $rules['companyKey'] = ['required', 'string', 'max:5', Rule::unique('company')->ignore($this->company->id_company, 'id_company'), function ($attribute, $value, $fail) {
                if ($this->company->isUsed() && $this->company->companyKey != $value) {
                    $fail("El registro ya se usó en el sistema y no se puede editar el campo :attribute");
                }
            }];
            $rules['name'] = ['string', 'max:100', 'required', function ($attribute, $value, $fail) {
                if ($this->company->isUsed() && $this->company->name != $value) {
                    $fail("El registro ya se usó en el sistema y no se puede editar el campo :attribute");
                }
            }];
            $rules['shortName'] = ['string', 'max:30', 'required', function ($attribute, $value, $fail) {
                if ($this->company->isUsed() && $this->company->shortName != $value) {
                    $fail("El registro ya se usó en el sistema y no se puede editar el campo :attribute");
                }
            }];
        }

        return $rules;
    }

    public function attributes()
    {
        return [
            'companyKey' => 'Clave de la empresa',
            'name' => 'Nombre de la empresa',
            'shortName' => 'Nombre corto de la empresa',
            'status' => 'Estatus',
            'description' => 'Descripción',
            'email' => 'Correo electrónico',
            'cellphone' => 'Celular',
            'phone' => 'Teléfono',
            'zipCode' => 'Código postal',
            'RFC' => 'RFC',
            'country' => 'País',
        ];
    }
}

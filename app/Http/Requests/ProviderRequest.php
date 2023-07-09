<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProviderRequest extends FormRequest
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

        if ($this->getMethod() == 'POST') {
            // dd($this->all());

            return [
                'nameProvider' => ['required', 'string', 'max:100'],
                'shortName' => ['nullable', 'string', 'max:5'],
                'rfc' => ['string', 'max:15', 'required'],
                'curp' => ['string', 'max:20', 'nullable'],
                'providerType' => ['string', 'nullable'],
                'BirthDate' => ['string', 'max:50', 'nullable'],
                'PlaceOfBirth' => ['string', 'max:100', 'nullable'],
                'Country' => ['required', 'string', 'max:100'],
                'IdCP' => ['required', 'string', 'max:15'],
                'OfficePhone' => ['string', 'max:20', 'nullable'],
                'CellPhone' => ['string', 'max:20', 'nullable'],
                'HomePhone' => ['string', 'max:20', 'nullable'],
                'Email' => ['nullable', 'string', 'max:50', 'email'],
                'Contact1' => ['nullable', 'string', 'max:50'],
                'Contact2' => ['string', 'max:50', 'nullable'],
                'CivilStatus' => ['string', 'nullable'],
                'providerStatus' => ['numeric', 'nullable'],
            ];
        }
        return [
            'nameProvider' => ['required', 'string', 'max:100', function ($attribute, $value, $fail) {
                if ($this->provider->isUsed() && $this->provider->nameProvider !== $value) {
                    $fail("El registro ya se usó en el sistema y no se puede editar el campo :attribute");
                }
            }],
            'nameProvider' => ['required', 'string', 'max:100'],
            'shortName' => ['nullable', 'string', 'max:5'],
            'rfc' => ['string', 'max:15', 'required'],
            'curp' => ['string', 'max:20', 'nullable'],
            'providerType' => ['string', 'nullable'],
            'BirthDate' => ['string', 'max:50', 'nullable'],
            'PlaceOfBirth' => ['string', 'max:100', 'nullable'],
            'Country' => ['required', 'string', 'max:100'],
            'IdCP' => ['required', 'string', 'max:15'],
            'OfficePhone' => ['string', 'max:20', 'nullable'],
            'CellPhone' => ['string', 'max:20', 'nullable'],
            'HomePhone' => ['string', 'max:20', 'nullable'],
            'Email' => ['nullable', 'string', 'max:50', 'email'],
            'Contact1' => ['nullable', 'string', 'max:50'],
            'Contact2' => ['string', 'max:50', 'nullable'],
            'CivilStatus' => ['string', 'nullable'],
            'providerStatus' => ['numeric', 'nullable'],
        ];
    }

    public function attributes()
    {
        return [
            'nameProvider' => 'Nombre del proveedor',
            'shortName' => 'Nombre corto del proveedor',
            'rfc' => 'RFC del proveedor',
            'curp' => 'CURP del proveedor',
            'providerType' => 'Tipo de proveedor',
            'BirthDate' => 'Fecha de nacimiento',
            'PlaceOfBirth' => 'Lugar de nacimiento',
            'Country' => 'País',
            'IdCP' => 'Código postal',
            'OfficePhone' => 'Teléfono de oficina',
            'CellPhone' => 'Teléfono celular',
            'HomePhone' => 'Teléfono de casa',
            'Email' => 'Correo electrónico',
            'Contact1' => 'Contacto 1',
            'Contact2' => 'Contacto 2',
            'CivilStatus' => 'Estado civil',
            'providerStatus' => 'Estado del proveedor',
        ];
    }
}

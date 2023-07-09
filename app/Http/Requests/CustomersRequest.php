<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomersRequest extends FormRequest
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
                'CustomerName' => ['required', 'string', 'max:100'],
                'LastName' => ['nullable', 'string', 'max:100'],
                'MotherLastName' => ['nullable', 'string', 'max:100'],
                'RFC' => ['string', 'max:15', 'required'],
                'CURP' => ['string', 'max:30', 'nullable'],
                'CivilStatus' => ['string', 'nullable'],
                'BirthDate' => ['string', 'max:50', 'nullable'],
                'PlaceOfBirth' => ['string', 'max:100', 'nullable'],
                'State' => ['required', 'string', 'max:30'],
                'Country' => ['required', 'string', 'max:100'],
                'IdCP' => ['required', 'string', 'max:15'],
                'OfficePhone' => ['string', 'max:20', 'nullable'],
                'CellPhone' => ['string', 'max:20', 'nullable'],
                'HomePhone' => ['string', 'max:20', 'nullable'],
                'Email' => ['nullable', 'string', 'max:50', 'email'],
                'Contact1' => ['nullable', 'string', 'max:50'],
                'Contact2' => ['string', 'max:50', 'nullable'],
                'CustomerStatus' => ['numeric', 'nullable'],
                'listPrice' => ['string', 'required'],
            ];
        }
        return [
            'CustomerName' => ['required', 'string', 'max:100', function ($attribute, $value, $fail) {
                if ($this->customer->isUsed() && $this->customer->CustomerName !== $value) {
                    $fail("El registro ya se usó en el sistema y no se puede editar el campo :attribute");
                }
            }],
            'LastName' => ['nullable', 'string', 'max:100', function ($attribute, $value, $fail) {
                if ($this->customer->isUsed() && $this->customer->LastName !== $value) {
                    $fail("El registro ya se usó en el sistema y no se puede editar el campo :attribute");
                }
            }],
            'MotherLastName' => ['nullable', 'string', 'max:100', function ($attribute, $value, $fail) {
                if ($this->customer->isUsed() && $this->customer->MotherLastName !== $value) {
                    $fail("El registro ya se usó en el sistema y no se puede editar el campo :attribute");
                }
            }],
            'CustomerName' => ['required', 'string', 'max:100'],
            'LastName' => ['nullable', 'string', 'max:100'],
            'MotherLastName' => ['nullable', 'string', 'max:100'],
            'RFC' => ['string', 'max:15', 'required'],
            'CURP' => ['string', 'max:30', 'nullable'],
            'CivilStatus' => ['string', 'nullable'],
            'BirthDate' => ['string', 'max:50', 'nullable'],
            'PlaceOfBirth' => ['string', 'max:100', 'nullable'],
            'State' => ['required', 'string', 'max:30'],
            'Country' => ['required', 'string', 'max:100'],
            'IdCP' => ['required', 'string', 'max:15'],
            'OfficePhone' => ['string', 'max:20', 'nullable'],
            'CellPhone' => ['string', 'max:20', 'nullable'],
            'HomePhone' => ['string', 'max:20', 'nullable'],
            'Email' => ['nullable', 'string', 'max:50', 'email'],
            'Contact1' => ['nullable', 'string', 'max:50'],
            'Contact2' => ['string', 'max:50', 'nullable'],
            'CustomerStatus' => ['numeric', 'nullable'],
            'listPrice' => ['string', 'required'],
        ];
    }

    public function attributes()
    {
        return [
            'CustomerName' => 'nombre del cliente',
            'RFC' => 'RFC del cliente',
            'CURP' => 'CURP del cliente',
            'State' => 'estado',
            'Country' => 'país',
            'IdCP' => 'código postal',
            'OfficePhone' => 'teléfono de oficina',
            'HomePhone' => 'teléfono de casa',
            'CellPhone' => 'teléfono celular',
            'PlaceOfBirth' => 'lugar de nacimiento',
            'BirthDate' => 'fecha de nacimiento',
            'CivilStatus' => 'estado civil',
            'Email' => 'correo electrónico del cliente',
            'CustomerStatus' => 'estatus del cliente',
            'LastName' => 'Apellido paterno',
            'MotherLastName' => 'Apellido materno',
            'Contact1' => 'Contacto 1',
            'Contact2' => 'Contacto 2',
            'listPrice' => 'Precio de lista',
        ];
    }
}

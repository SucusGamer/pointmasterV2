<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'productName' => ['required', 'string', 'max:100'],
            'tradeName' => ['nullable', 'string', 'max:100'],
            'iva' => ['nullable', 'string', 'max:100'],
            'productListPrice1' => ['string', 'max:15', 'required'],
            'productListPrice2' => ['string', 'max:15', 'required'],
            'productListPrice3' => ['string', 'max:15', 'nullable'],
            'productListPrice4' => ['string', 'max:15', 'nullable'],
            'productListPrice5' => ['string', 'max:15', 'nullable'],
            'status' => ['numeric', 'nullable'],
            'productFamily' => ['numeric', 'nullable'],
            'productGroup' => ['numeric', 'nullable'],
            'productCategory' => ['numeric', 'nullable'],
            'image' => ['nullable', 'image', 'max:2048']
        ];

        if ($this->getMethod() == 'POST') {
            $rules['productKey'] = ['required', 'string', 'max:5', 'unique:product'];
        }
        return $rules;
    }

    public function attributes()
    {
        return [
            'productKey' => 'Clave',
            'productName' => 'Nombre',
            'tradeName' => 'Nombre Comercial',
            'iva' => 'IVA',
            'productListPrice1' => 'Precio Lista 1',
            'productListPrice2' => 'Precio Lista 2',
            'productListPrice3' => 'Precio Lista 3',
            'productListPrice4' => 'Precio Lista 4',
            'productListPrice5' => 'Precio Lista 5',
            'status' => 'Estatus',
            'productFamily' => 'Familia',
            'productGroup' => 'Grupo',
            'productCategory' => 'Categoria',
            'image' => 'Imagen'
        ];
    }
}

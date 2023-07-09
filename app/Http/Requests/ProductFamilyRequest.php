<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFamilyRequest extends FormRequest
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
                    'nameFamily' => ['required', 'string', 'max:100'],
                    'statusFamily' => ['numeric', 'required'],
                ];
        
                if ($this->getMethod() == 'POST') {
                    $rules['nameFamily'] = ['required', 'string', 'max:100', 'unique:families'];
                }
                return $rules;
    }

    public function attributes()
    {
        return [
            'nameFamily' => 'Nombre de la familia',
            'statusFamily' => 'Estatus de la familia',
        ];
    }
}

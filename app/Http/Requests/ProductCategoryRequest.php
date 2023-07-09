<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCategoryRequest extends FormRequest
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
                'nameCategory' => ['required', 'string', 'max:100'],
                'statusCategory' => ['numeric', 'required'],
            ];
    
            if ($this->getMethod() == 'POST') {
                $rules['nameCategory'] = ['required', 'string', 'max:100', 'unique:category'];
            }
            return $rules;
    }

    public function attributes()
    {
        return [
            'nameCategory' => 'Nombre de la categoria',
            'statusCategory' => 'Estatus de la categoria',
        ];
    }
}

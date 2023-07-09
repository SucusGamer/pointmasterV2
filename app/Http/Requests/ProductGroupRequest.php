<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductGroupRequest extends FormRequest
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
                        'nameGroup' => ['required', 'string', 'max:100'],
                        'statusGroup' => ['numeric', 'required'],
                    ];
            
                    if ($this->getMethod() == 'POST') {
                        $rules['nameGroup'] = ['required', 'string', 'max:100', 'unique:groups'];
                    }
                    return $rules;
    }

    public function attributes()
    {
        return [
            'nameGroup' => 'Nombre del grupo',
            'statusGroup' => 'Estatus del grupo',
        ];
    }
}

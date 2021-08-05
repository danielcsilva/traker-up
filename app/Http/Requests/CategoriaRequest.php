<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriaRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'categoria'=> 'required|min:2|string|unique:categorias',
            'dsc_categoria' => '',
        ];
    }


    public function messages()
    {
        return [
            'categoria.required' => 'A categoria é obrigatória',
            'categoria.min' => 'O categoria só aceita palavras com mais de 2 digitos',
            'categoria.string' => 'Por favor descreva a categoria',
            'categoria.unique' => 'já existe uma categoria cadastrada com esse nome!'
        ];
    }
}

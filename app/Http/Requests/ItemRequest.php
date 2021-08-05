<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
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
            'item'=> 'required',
            'id_categoria' => 'required',
            'dsc_item' => '',
        ];
    }


    public function messages()
    {
        return [
            'item.required' => 'O item é obrigatório',
            'id_categoria.required' => 'A categoria é obrigatória'
        ];
    }
}

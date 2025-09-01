<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddToBasketRequest extends FormRequest {

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
        return [
            'product_id' => 'required|integer|min:1',
            'count'      => 'required|integer|min:1|max:999',
        ];
    }

    /**
     * Get custom error messages for validation.
     *
     * @return array<string, string>
     */
    public function messages()
    {
        return [
            'product_id.required' => 'ID товара обязателен для заполнения.',
            'product_id.integer'  => 'ID товара должен быть целым числом.',
            'product_id.min'      => 'ID товара должен быть больше 0.',
            'count.required'      => 'Количество товара обязательно для заполнения.',
            'count.integer'       => 'Количество должно быть целым числом.',
            'count.min'           => 'Количество должно быть больше 0.',
            'count.max'           => 'Количество не может быть больше 999.',
        ];
    }

}

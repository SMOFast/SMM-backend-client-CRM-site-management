<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddToBasketRequest extends FormRequest {

    public function rules() {
        return [
            'product_id' => 'required|numeric',
            'count'      => 'required|numeric',
        ];
    }

}

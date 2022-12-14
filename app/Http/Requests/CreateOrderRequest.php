<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateOrderRequest extends FormRequest {

    public function rules() {
        return [
            'url'   => 'required|active_url',
            'email' => 'required|email:strict',
            'count' => 'required|numeric',
        ];
    }

}

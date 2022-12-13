<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddToBasketRequest;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function addToBasket(AddToBasketRequest $request)
    {
        session(['basket'=>['product_id'=>$request->get('product_id'), 'count'=>$request->get('count')]]);

        return redirect('cart');
    }

    public function showCart(Request $request)
    {
        $basket = $request->session()->get('basket');
        return view('pages.cart', [
            'product'        => '',
        ]);
    }
}

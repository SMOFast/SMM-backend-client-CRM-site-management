<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddToBasketRequest;
use App\Http\Requests\CreateOrderRequest;
use App\Services\Server\ProductService;
use Illuminate\Http\Request;

class OrderController extends Controller {

    public function addToBasket(AddToBasketRequest $request) {
        session(['cart' => ['product_id' => $request->get('product_id'), 'count' => $request->get('count')]]);

        return redirect('cart');
    }

    public function showCart(Request $request) {
        $cart = $request->session()->get('cart');

        if ($cart ?? null) {
            $product = app(ProductService::class)->product($cart['product_id']);
        }

        return view('pages.cart', [
            'product' => $product[0] ?? null,
            'cart'    => $cart ?? null,
        ]);
    }

}

<?php

namespace App\Http\Livewire\Cart;

use App\Http\Controllers\Users\RegisterController;
use App\Services\Client\Dto\RegisterUserRequestClientDto;
use App\Services\Server\ProductService;
use Illuminate\Session\SessionManager;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Fortify;
use Livewire\Component;

class Order extends Component {

    public $email;
    public $url;
    public $count;
    public $product;
    public $cart;

    protected $rules = [
        'email' => [
            'required',
            'email:strict',
        ],
        'url'   => 'required|active_url',
        'count' => 'required|numeric',
    ];

    public function mount(SessionManager $session)
    {
        $this->cart = $session->get('cart');

        $this->count = $this->cart['count'];

        $product = app(ProductService::class)->product($this->cart['product_id']);

        $this->product = $product[0];

    }

    public function updateCount($count)
    {
        $this->count = $count;
    }

    public function render() {
        return view('livewire.cart.order');
    }

    public function create() {
        $this->validate();

        /* todo check user exist, if no - register */
        dd($this->email, $this->url, $this->count);

        $dto = (new RegisterUserRequestClientDto([
            'email'    => $this->email,
            'password' => $this->password,
        ]));

        try {
            app(RegisterController::class)->store($dto);
        } catch (\Throwable $e) {
            throw ValidationException::withMessages([
                Fortify::username() => [$e->getMessage()],
            ]);
        }

        $this->redirect(route('login'));

    }
}

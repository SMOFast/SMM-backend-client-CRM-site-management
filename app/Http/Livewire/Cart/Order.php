<?php

namespace App\Http\Livewire\Cart;

use App\Http\Controllers\Users\RegisterController;
use App\Models\User;
use App\Services\Auth\UsersService;
use App\Services\Client\Dto\LoginUserRequestClientDto;
use App\Services\Client\Dto\RegisterUserRequestClientDto;
use App\Services\Server\Dto\Requests\CreateOrderRequestDto;
use App\Services\Server\OrderService;
use App\Services\Server\PaymentSystemService;
use App\Services\Server\ProductService;
use Auth;
use Illuminate\Session\SessionManager;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Fortify;
use Livewire\Component;

class Order extends Component {

    public $email;
    public $url;
    public $count;
    public $product;
    public $cart;
    public $paymentSystems;
    public $paymentSystem;

    public $paymentForm;

    protected $rules = [
        'email'         => [
            'required',
            'email:strict',
        ],
        'url'           => 'required|active_url',
        'count'         => 'required|numeric',
        'paymentSystem' => 'required|numeric',
    ];

    public function mount(SessionManager $session) {

        $this->cart = $session->get('cart');

        if ($this->cart === null) {
            return false;
        }

        $this->count = $this->cart['count'];

        $product = app(ProductService::class)->product($this->cart['product_id']);

        $this->product = $product[0];

        $this->paymentSystems = app(PaymentSystemService::class)->list();

        if (Auth::user()) {
            $this->email = Auth::user()->email;
        }

        return true;

    }

    public function updateCount($count) {
        $this->count = $count;
    }

    public function render() {
        return view('livewire.cart.order');
    }

    public function create() {
        $this->validate();

        /* todo check user exist, if no - register */
        //        dd($this->email, $this->url, $this->count);

        if (Auth::user() === null) {

            if (User::query()->where(['email' => $this->email])->exists()) {
                session()->flash('error', __('auth.need_login_first'));

                return false;
            }

            try {

                $password = Str::random(8);
                $registerDto = (new RegisterUserRequestClientDto([
                    'email'    => $this->email,
                    'password' => $password,
                ]));

                (new UsersService())->registerUser($registerDto);


                $loginDto = (new LoginUserRequestClientDto([
                    'email'    => $this->email,
                    'password' => $password,
                    'remember' => false,
                    'ip'       => request()->server('REMOTE_ADDR'),
                ]));

                (new UsersService())->auth($loginDto);

            } catch (\Throwable $e) {
                session()->flash('error', $e->getMessage());

                return false;
            }

        }


        try {

            $orderDto = new CreateOrderRequestDto([
                'items'=>[
                    ['id'=>$this->cart['product_id'], 'count'=>$this->count],
                ],
                'url'            => $this->url,
                'payment_system_id' => $this->paymentSystem,
                'user'           => Auth::user(),
            ]);

            $order = (new OrderService())->create($orderDto);
        } catch (\Throwable $e) {
            session()->flash('error', $e->getMessage());

            return false;
        }

        session()->forget('cart');

        if ($order->paymentForm ?? null) {
            $this->paymentForm = $order->paymentForm;
            return true;
        }

        $this->redirect(route('orders'));

        return true;
    }
}

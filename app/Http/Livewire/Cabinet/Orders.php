<?php

namespace App\Http\Livewire\Cabinet;

use App\Http\Controllers\Users\RegisterController;
use App\Models\User;
use App\Services\Auth\UsersService;
use App\Services\Client\Dto\LoginUserRequestClientDto;
use App\Services\Client\Dto\RegisterUserRequestClientDto;
use App\Services\Server\Dto\Requests\CreateOrderRequestDto;
use App\Services\Server\Dto\Requests\ListOrdersRequestDto;
use App\Services\Server\OrderService;
use App\Services\Server\PaymentSystemService;
use App\Services\Server\ProductService;
use Auth;
use Illuminate\Session\SessionManager;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Fortify;
use Livewire\Component;

class Orders extends Component {

    public $search;
    public $status;
    public $categoryId;
    public $orders;

    protected $rules = [
        'search'     => 'sometimes',
        'status'     => 'sometimes|numeric',
        'categoryId' => 'sometimes|numeric',
    ];


    public function render() {

        $filter = (new ListOrdersRequestDto(['search' => $this->search, 'status' => $this->status, 'category_id' => $this->categoryId, 'user'=>Auth::user()]));
        try {
            $this->orders = (new OrderService())->list($filter);
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage()); //todo replace
        }

        return view('livewire.cabinet.orders');
    }


}

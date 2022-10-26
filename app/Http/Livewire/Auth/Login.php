<?php

namespace App\Http\Livewire\Auth;

use App\Http\Controllers\Users\AuthController;
use App\Services\Server\Dto\Requests\LoginUserRequestDto;
use App\Services\Server\Dto\Requests\RegisterUserRequestDto;
use Livewire\Component;

class Login extends Component
{

    public $name;
    public $password;
    public $remember;

    protected $rules = [
        'name'     => 'required|min:2',
        'password' => 'required',
        'remember' => 'sometimes|nullable',
    ];

    public function render()
    {
        return view('livewire.auth.login');
    }

    public function auth()
    {
        $this->validate();

        $dto = (new LoginUserRequestDto([
            'name'     => $this->name,
            'password' => $this->password,
            'remember' => $this->remember,
            'ip'       => $_SERVER['REMOTE_ADDR'],
        ]));

        $res = app(AuthController::class)->store($dto);

        dd($res);

    }
}

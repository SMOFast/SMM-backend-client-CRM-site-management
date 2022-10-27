<?php

namespace App\Http\Livewire\Auth;

use App\Http\Controllers\Users\AuthController;
use App\Services\Client\Dto\LoginUserRequestClientDto;
use Livewire\Component;

class Login extends Component
{

    public $email;
    public $password;
    public $remember;

    protected $rules = [
        'email'    => 'required|email:strict',
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

        $dto = (new LoginUserRequestClientDto([
            'email'    => $this->email,
            'password' => $this->password,
            'remember' => $this->remember,
            'ip'       => request()->server('REMOTE_ADDR'),
        ]));

        app(AuthController::class)->store($dto);

        $this->redirect(route('index'));

    }
}

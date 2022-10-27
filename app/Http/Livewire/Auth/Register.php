<?php

namespace App\Http\Livewire\Auth;

use App\Http\Controllers\Users\RegisterController;
use App\Services\Client\Dto\RegisterUserRequestClientDto;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Fortify;
use Livewire\Component;

class Register extends Component
{

    public $email;
    public $password;
    public $password_confirmation;

    protected $rules = [
        'email'    => [
            'required',
            'string',
            'email',
            'max:255',
            'unique:users',
        ],
        'password' => 'required|confirmed|string|min:8',
    ];

    public function render()
    {
        return view('livewire.auth.register');
    }

    public function register()
    {
        $this->validate();

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

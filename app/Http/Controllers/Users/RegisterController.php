<?php

namespace App\Http\Controllers\Users;

use App\Services\Auth\UsersService;
use App\Services\Client\Dto\RegisterUserRequestClientDto;

class RegisterController
{

    public function create()
    {
        return view('pages.auth.register');
    }

    /**
     * @throws \Throwable
     */
    public function store(RegisterUserRequestClientDto $dto)
    {
        (new UsersService())->registerUser($dto);
    }

}

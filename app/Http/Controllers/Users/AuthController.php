<?php

namespace App\Http\Controllers\Users;

use App\Services\Auth\UsersService;
use App\Services\Client\Dto\LoginUserRequestClientDto;

class AuthController
{

    public function create()
    {
        return view('pages.auth.login');
    }

    public function store(LoginUserRequestClientDto $dto)
    {
        return (new UsersService())->auth($dto);
    }

}

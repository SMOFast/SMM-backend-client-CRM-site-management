<?php

namespace App\Http\Controllers\Users;

use App\Services\Auth\UsersService;
use App\Services\Client\Dto\RegisterUserRequestClientDto;

class CabinetController
{

    public function orders()
    {
        return view('pages.cabinet.orders');
    }

    /**
     * @throws \Throwable
     */
    public function store(RegisterUserRequestClientDto $dto)
    {
        (new UsersService())->registerUser($dto);
    }

}

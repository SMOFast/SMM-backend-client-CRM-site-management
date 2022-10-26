<?php

namespace App\Services\Server\Dto\Requests;

use Spatie\DataTransferObject\DataTransferObject;

class LoginUserRequestDto extends DataTransferObject
{

    public string $name;

    public string $password;

    public string $ip;

    public ?bool $remember;

}


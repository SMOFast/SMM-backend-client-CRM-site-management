<?php

namespace App\Services\Client\Dto;

use Spatie\DataTransferObject\DataTransferObject;

class RegisterUserRequestClientDto extends DataTransferObject
{
    public string $email;
    public string $password;
}


<?php

namespace App\Services\Server\Dto\Requests;

use Spatie\DataTransferObject\Attributes\MapFrom;
use Spatie\DataTransferObject\DataTransferObject;

class RegisterUserRequestDto extends DataTransferObject
{

    #[MapFrom('id')]
    public int    $user_id;

    public string $name;

    public string $email;

    public string $password;

}


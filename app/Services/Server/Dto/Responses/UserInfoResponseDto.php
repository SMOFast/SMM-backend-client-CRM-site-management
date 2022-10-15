<?php

namespace App\Services\Server\Dto\Responses;

use Spatie\DataTransferObject\DataTransferObject;

class UserInfoResponseDto extends DataTransferObject
{

    public int $id;

    public string $name;

    public string $email;

    public int $status;
}


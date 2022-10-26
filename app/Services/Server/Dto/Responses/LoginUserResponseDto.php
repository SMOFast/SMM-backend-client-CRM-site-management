<?php

namespace App\Services\Server\Dto\Responses;

use Spatie\DataTransferObject\DataTransferObject;

class LoginUserResponseDto extends DataTransferObject
{

    public int    $user_id;
    public string $access_token;

}


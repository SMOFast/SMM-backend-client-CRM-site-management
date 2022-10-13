<?php

namespace App\Services\Server\Dto\Responses;

use Illuminate\Contracts\Support\Arrayable;

class RegisterUserResponseDto implements Arrayable
{

    public int    $user_id;
    public string $access_token;

    public static function createFromObject(object $object): self
    {

        $dto               = new self();
        $dto->user_id      = $object->user_id;
        $dto->access_token = $object->access_token;

        return $dto;
    }

    public function toArray(): array
    {
        return [
            'user_id'      => $this->user_id,
            'access_token' => $this->access_token,
        ];
    }
}


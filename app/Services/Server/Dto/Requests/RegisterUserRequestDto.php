<?php

namespace App\Services\Server\Dto\Requests;

use App\Models\User;
use Illuminate\Contracts\Support\Arrayable;

class RegisterUserRequestDto implements Arrayable
{

    public int    $id;
    public string $name;
    public string $email;
    public string $password;

    public static function createFromModel(User $user): self
    {
        return self::createFromObject($user);
    }

    public static function createFromObject(object $object): self
    {

        $dto           = new self();
        $dto->id       = $object->id;
        $dto->name     = $object->name;
        $dto->email    = $object->email;
        $dto->password = $object->password;

        return $dto;
    }

    public function toArray(): array
    {
        return [
            'id'       => $this->id,
            'name'     => $this->name,
            'email'    => $this->email,
            'password' => $this->password,
        ];
    }
}


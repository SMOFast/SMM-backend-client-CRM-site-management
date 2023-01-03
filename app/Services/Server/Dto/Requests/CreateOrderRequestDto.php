<?php

namespace App\Services\Server\Dto\Requests;

use App\Models\User;
use Spatie\DataTransferObject\DataTransferObject;

class CreateOrderRequestDto extends DataTransferObject {

    public array $items;
    public string $url;
    public int $payment_system_id;
    public User $user;

}


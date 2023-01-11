<?php

namespace App\Services\Server\Dto\Requests;

use App\Models\User;
use Spatie\DataTransferObject\DataTransferObject;

class ListOrdersRequestDto extends DataTransferObject {

    public ?string $search;
    public ?string $category_id;
    public ?int $status;
    public User $user;

}


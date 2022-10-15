<?php

namespace App\Services\Server\Exceptions;

class UnauthenticatedResponseException extends BaseServerException
{
    public function __construct()
    {
        parent::__construct();

        $this->message = __('errors.unauthenticated');
    }
}

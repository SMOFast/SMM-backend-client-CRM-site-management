<?php

namespace App\Services\Server\Exceptions;

use Exception;

abstract class BaseServerException extends Exception
{

    public function __construct(string $message = "")
    {
        parent::__construct($message);
    }

}

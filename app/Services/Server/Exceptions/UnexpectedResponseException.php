<?php

namespace App\Services\Server\Exceptions;

use Exception;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Psr7\Response;

class UnexpectedResponseException extends BaseServerException
{
    public function __construct()
    {
        parent::__construct();

        $this->message = __('errors.unexpected_error');
    }
}

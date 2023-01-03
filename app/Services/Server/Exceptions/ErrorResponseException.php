<?php

namespace App\Services\Server\Exceptions;

use Exception;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Psr7\Response;

class ErrorResponseException extends BaseServerException
{
    public function __construct(string $response, Exception|ClientException $e)
    {

        parent::__construct();



        $this->message = $response;

    }
}

<?php

namespace App\Services\Server\Exceptions;

use Exception;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Psr7\Response;

class ErrorResponseException extends BaseServerException
{
    public function __construct(Response $response, Exception|ClientException $e)
    {

        parent::__construct();

        $json = json_decode($response->getBody()->getContents());
        if (!$json) {
            throw new \RuntimeException('Wrong answer');
        }

        $this->message = $json->error;

    }
}

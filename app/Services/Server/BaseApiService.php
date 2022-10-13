<?php

namespace App\Services\Server;

use App\Models\User;
use App\Services\Server\Dto\Requests\RegisterUserRequestDto;
use App\Services\Server\Dto\Responses\RegisterUserResponseDto;
use App\Services\Server\Exceptions\ErrorResponseException;
use App\Services\Server\Exceptions\UnexpectedResponseException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class BaseApiService
{

    protected Client $client;
    protected array  $headers = [];

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => config('app.server_api_url'),
        ]);
    }

    /**
     * @throws \App\Services\Server\Exceptions\UnexpectedResponseException
     * @throws \App\Services\Server\Exceptions\ErrorResponseException
     */
    public function registerUser(RegisterUserRequestDto $dto): RegisterUserResponseDto
    {

        $response = $this->request('register', $dto->toArray());

        return RegisterUserResponseDto::createFromObject($response);

    }

    private function request($url, $data, $method = 'POST')
    {

        $headers = array_merge([
            'X-Client-Token' => config('app.server_api_key'),
        ], $this->headers);

        $options = [
            'headers' => $headers,
        ];

        switch ($method){
            case 'GET':
                $options['query'] = $data;
                break;
            default:
                $options['json'] = $data;
        }

        try {
            $response = $this->client->request($method, $url, $options);
        } catch (GuzzleException $e) {
            $response = $e->getResponse();
            throw new ErrorResponseException($response, $e);
        }

        $jsonBody = json_decode($response->getBody()->getContents());

        if (!is_object($jsonBody)) {
            throw new UnexpectedResponseException();
        }

        return $jsonBody;


    }
}

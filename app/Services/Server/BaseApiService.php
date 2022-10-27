<?php

namespace App\Services\Server;

use App\Models\User;
use App\Services\Server\Dto\Requests\RegisterUserRequestDto;
use App\Services\Server\Dto\Responses\CategoriesResponseDto;
use App\Services\Server\Dto\Responses\RegisterUserResponseDto;
use App\Services\Server\Dto\Responses\UserInfoResponseDto;
use App\Services\Server\Exceptions\ErrorResponseException;
use App\Services\Server\Exceptions\UnauthenticatedResponseException;
use App\Services\Server\Exceptions\UnexpectedResponseException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Collection;

class BaseApiService
{

    protected Client $client;
    protected array  $headers = [];
    private ?User    $user    = null;

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
    public function categories(): Collection
    {
        $response = $this->request(url: 'categories', method: 'GET');

        $categories = new Collection();
        foreach ($response['data'] as $category) {
            $categories->add($category);
        }

        return $categories;
    }

    /**
     * @throws \App\Services\Server\Exceptions\UnexpectedResponseException
     * @throws \App\Services\Server\Exceptions\ErrorResponseException
     * @throws \Spatie\DataTransferObject\Exceptions\UnknownProperties
     */
    public function registerUser(RegisterUserRequestDto $dto): RegisterUserResponseDto
    {
        $response = $this->request('register', $dto->toArray());

        return (new RegisterUserResponseDto($response));
    }

    /**
     * @throws \Spatie\DataTransferObject\Exceptions\UnknownProperties
     * @throws \App\Services\Server\Exceptions\UnexpectedResponseException
     * @throws \App\Services\Server\Exceptions\ErrorResponseException
     * @throws \App\Services\Server\Exceptions\UnauthenticatedResponseException
     */
    public function me(): UserInfoResponseDto
    {

        if ($this->user === null) {
            throw new UnauthenticatedResponseException();
        }

        $response = $this->request(url: 'me', method: 'GET');

        return (new UserInfoResponseDto($response));
    }


    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): BaseApiService
    {
        $this->user = $user;

        return $this;
    }


    private function request($url, $data = [], $method = 'POST')
    {

        $headers = array_merge([
            'X-Client-Token' => config('app.server_api_key'),
            'Content-Type'   => 'application/json',
            'Accept'         => 'application/json',
        ], $this->headers);

        if ($this->user ?? null) {
            $headers['Authorization'] = 'Bearer ' . $this->user->server_user_token;
        }

        $options = [
            'headers' => $headers,
        ];

        if (!empty($data)) {
            switch ($method) {
                case 'GET':
                    $options['query'] = $data;
                    break;
                default:
                    $options['json'] = $data;
            }
        }

        try {
            $response = $this->client->request($method, $url, $options);
        } catch (GuzzleException $e) {
            $response = $e->getResponse();
            throw new ErrorResponseException($response, $e);
        }

        $jsonBody = json_decode($response->getBody()->getContents(), true);

        if (!is_array($jsonBody)) {
            throw new UnexpectedResponseException();
        }

        return $jsonBody;

    }
}

<?php

namespace App\Services\Server;
use App\Services\Server\Dto\Requests\CreateOrderRequestDto;
use App\Services\Server\Dto\Requests\ListOrdersRequestDto;

class OrderService
{

    function list(ListOrdersRequestDto $dto)
    {
        try {
            $ordersData = (new BaseApiService())->orders($dto);
        } catch (\Throwable $e) {
            throw new \Exception($e->getMessage()); //todo fix
        }

        return $ordersData;
    }

    /**
     * @throws \Exception
     */
    function create(CreateOrderRequestDto $dto): Dto\Responses\CreateOrderResponseDto {

        try {
            $orderData = (new BaseApiService())->createOrder($dto);
        } catch (\Throwable $e) {
            throw new \Exception($e->getMessage()); //todo fix
        }

        return $orderData;
    }

}

<?php

namespace App\Services\Server;
use Illuminate\Support\Collection;

class PaymentSystemService
{

    /**
     * @throws \Exception
     */
    function list(int $paymentSystem = null): Collection {

        try {
            $orderData = (new BaseApiService())->paymentSystems($paymentSystem);
        } catch (\Throwable $e) {
            throw new \Exception($e->getMessage()); //todo fix
        }

        return $orderData;
    }

}

<?php

declare(strict_types=1);

namespace App\Services\OrderState;

use Exception;
use App\Models\Order;
use App\Interfaces\OrderStateInterface;

class DeliverOrderState implements OrderStateInterface
{
    public function process(Order $order)
    {
        throw new Exception("Can't process delivered orders.");
    }

    public function ship(Order $order)
    {
        throw new Exception("Can't ship delivered orders.");
    }

    public function deliver(Order $order)
    {
        throw new Exception("Already shipped order.");
    }
}

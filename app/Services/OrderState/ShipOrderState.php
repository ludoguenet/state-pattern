<?php

declare(strict_types=1);

namespace App\Services\OrderState;

use Exception;
use App\Models\Order;
use App\Interfaces\OrderStateInterface;

class ShipOrderState implements OrderStateInterface
{
    public function process(Order $order)
    {
        throw new Exception("Can't process shipped orders.");
    }

    public function ship(Order $order)
    {
        throw new Exception("Already shipped order.");
    }

    public function deliver(Order $order)
    {
        $order->status = 'delivered';
        $order->save();
    }
}

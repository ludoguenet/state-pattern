<?php

declare(strict_types=1);

namespace App\Services\OrderState;

use Exception;
use App\Models\Order;
use App\Interfaces\OrderStateInterface;

class ProcessingOrderState implements OrderStateInterface
{
    public function process(Order $order)
    {
        throw new Exception("Already processing order.");
    }

    public function ship(Order $order)
    {
        $order->status = 'shipped';
        $order->save();
    }

    public function deliver(Order $order)
    {
        throw new Exception("Can't deliver processing orders.");
    }
}

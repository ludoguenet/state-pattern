<?php

declare(strict_types=1);

namespace App\Services\OrderState;

use App\Models\Order;
use App\Interfaces\OrderStateInterface;
use Exception;

class NewOrderState implements OrderStateInterface
{
    public function process(Order $order)
    {
        $order->status = 'processing';
        $order->save();
    }

    public function ship(Order $order)
    {
        throw new Exception("Can't ship new orders.");
    }

    public function deliver(Order $order)
    {
        throw new Exception("Can't deliver new orders.");
    }
}

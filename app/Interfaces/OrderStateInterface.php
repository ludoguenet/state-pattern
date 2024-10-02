<?php

declare(strict_types=1);

namespace App\Interfaces;

use App\Models\Order;

interface OrderStateInterface
{
    public function process(Order $order);
    public function ship(Order $order);
    public function deliver(Order $order);
}

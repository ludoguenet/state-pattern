<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Order;
use App\Interfaces\OrderStateInterface;
use App\Services\OrderState\DeliverOrderState;
use App\Services\OrderState\NewOrderState;
use App\Services\OrderState\ProcessingOrderState;
use App\Services\OrderState\ShipOrderState;

class OrderStateService
{
    private function getState(Order $order): OrderStateInterface
    {
        return match($order->status) {
            'new' => new NewOrderState,
            'processing' => new ProcessingOrderState,
            'shipped' => new ShipOrderState,
            'delivered' => new DeliverOrderState,
        };
    }

    public function process(Order $order)
    {
        $state = $this->getState($order);
        $state->process($order);
    }

    public function ship(Order $order)
    {
        $state = $this->getState($order);
        $state->ship($order);
    }

    public function deliver(Order $order)
    {
        $state = $this->getState($order);
        $state->deliver($order);
    }
}

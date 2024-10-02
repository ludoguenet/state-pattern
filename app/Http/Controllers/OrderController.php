<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Services\OrderStateService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct(private OrderStateService $service)
    {
    }

    public function process(Order $order) {
        $this->service->process($order);
    }

    public function ship(Order $order) {
        $this->service->ship($order);
    }

    public function deliver(Order $order) {
        $this->service->deliver($order);
    }
}

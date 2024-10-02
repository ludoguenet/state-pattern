<?php

declare(strict_types=1);

use App\Models\Order;
use Illuminate\Support\Facades\Exceptions;

it('can process an order', function () {
    $order = Order::factory()->set('status', 'new')->create();

    $this->get(route('orders.process', $order))->assertOk();

    expect($order->refresh()->status)->toBe('processing');
});

it('cant process an order', function () {
    Exceptions::fake();

    $order = Order::factory()->set('status', 'shipped')->create();

    $this->get(route('orders.process', $order));

    Exceptions::assertReported(Exception::class);
});
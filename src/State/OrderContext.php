<?php

namespace App\State;

final class OrderContext
{
    private OrderState $orderState;

    public static function create(): OrderContext
    {
        $order = new self();
        $order->orderState = new PaymentPending();
        return $order;
    }

    public function setState(OrderState $state)
    {
        $this->orderState = $state;
    }

    public function verifyPayment()
    {
        $this->orderState->verifyPayment($this);
    }

    public function cancelOrder()
    {
        $this->orderState->verifyPayment($this);
    }

    public function shipOrder()
    {
        $this->orderState->shipOrder($this);
    }

    public function __toString(): string
    {
        return $this->orderState;
    }
}
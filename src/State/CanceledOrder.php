<?php

namespace App\State;

class CanceledOrder implements OrderState
{

    public function verifyPayment(OrderContext $orderContext)
    {
        $orderContext->setState($this);
    }

    public function cancelOrder(OrderContext $orderContext)
    {
        $orderContext->setState($this);
    }

    public function shipOrder(OrderContext $orderContext)
    {
        $orderContext->setState($this);
    }

    public function __toString(): string
    {
        return get_class($this);
    }
}
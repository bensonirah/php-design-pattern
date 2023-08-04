<?php

namespace App\State;

class OrderShipped implements OrderState
{
//https://www.youtube.com/watch?v=gMyRtqwxr10
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
<?php

namespace App\State;

class OrderPrepared implements OrderState
{

    public function verifyPayment(OrderContext $orderContext)
    {
        $orderContext->setState($this);
    }

    public function cancelOrder(OrderContext $orderContext)
    {
        $orderContext->setState(new CanceledOrder());
    }

    public function shipOrder(OrderContext $orderContext)
    {
        $orderContext->setState(new OrderShipped());
    }

    public function __toString(): string
    {
        return get_class($this);
    }
}
<?php

namespace App\State;

class PaymentPending implements OrderState
{

    public function verifyPayment(OrderContext $orderContext)
    {
        $orderContext->setState(new OrderPrepared());
    }

    public function cancelOrder(OrderContext $orderContext)
    {
        $orderContext->setState(new CanceledOrder());
    }

    public function shipOrder(OrderContext $orderContext)
    {
//        You can throw an error when operation is not supported
        $orderContext->setState($this);
    }

    public function __toString(): string
    {
        // TODO: Implement __toString() method.
    }
}
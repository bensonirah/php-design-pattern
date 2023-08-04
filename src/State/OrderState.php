<?php

namespace App\State;

interface OrderState
{
    public function verifyPayment(OrderContext $orderContext);

    public function cancelOrder(OrderContext $orderContext);

    public function shipOrder(OrderContext $orderContext);

    public function __toString(): string;
}
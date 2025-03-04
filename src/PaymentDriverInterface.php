<?php

namespace PhpPaymentGateway;

interface PaymentDriverInterface
{
    public function pay(array $data);
}
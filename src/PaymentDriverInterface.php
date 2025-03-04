<?php

namespace UTurakulov\PhpPaymentGateway;

interface PaymentDriverInterface
{
    public function pay(float $amount, string $currency, string $to): bool;
}
<?php

namespace UTurakulov\PhpPaymentGateway\Drivers;

use UTurakulov\PhpPaymentGateway\PaymentDriverInterface;

class PaypalDriver implements PaymentDriverInterface
{
    public function pay(float $amount, string $currency, string $to): bool
    {
        echo "Оплата через PayPal: $amount $currency -> $to\n";
        return true;
    }
}
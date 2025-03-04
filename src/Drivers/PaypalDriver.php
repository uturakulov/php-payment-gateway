<?php

namespace PhpPaymentGateway\Drivers;

use PhpPaymentGateway\PaymentDriverInterface;

class PaypalDriver implements PaymentDriverInterface
{
    public function pay(float $amount, string $currency, string $to): bool
    {
        echo "Оплата через PayPal: $amount $currency -> $to\n";
        return true;
    }
}
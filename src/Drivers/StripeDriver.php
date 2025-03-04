<?php

namespace UTurakulov\PhpPaymentGateway\Drivers;

use UTurakulov\PhpPaymentGateway\PaymentDriverInterface;

class StripeDriver implements PaymentDriverInterface
{
    public function pay(float $amount, string $currency, string $to): bool
    {
        echo "Оплата через Stripe: $amount $currency -> $to\n";
        return true;
    }
}
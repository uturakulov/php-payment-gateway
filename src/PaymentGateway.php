<?php

namespace PhpPaymentGateway;

use PhpPaymentGateway\Drivers\StripeDriver;

class PaymentGateway
{
    protected static $driver;

    /**
     * Установить драйвер вручную
     */
    public static function driver($name = null)
    {
        $name = $name ?: getenv('PAYMENT_DRIVER');

        return match ($name) {
            'stripe' => new StripeDriver(getenv('STRIPE_SECRET')),
            default => throw new \Exception("Unsupported payment driver: {$name}"),
        };
    }

    /**
     * Быстрый вызов оплаты
     */
    public static function pay(array $data)
    {
        return self::driver()->pay($data);
    }
}
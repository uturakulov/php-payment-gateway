<?php

namespace UTurakulov\PhpPaymentGateway;

use UTurakulov\PhpPaymentGateway\Drivers\PaypalDriver;
use UTurakulov\PhpPaymentGateway\Drivers\StripeDriver;

class PaymentGateway
{
    protected static ?PaymentDriverInterface $driver = null;
    protected static array $drivers = [];

    public static function driver(string $name): self
    {
        if (!isset(self::$drivers[$name])) {
            self::$drivers[$name] = self::resolveDriver($name);
        }
        self::$driver = self::$drivers[$name];
        return new self();
    }

    public function __call(string $method, array $args)
    {
        if (!self::$driver) {
            self::driver(getenv('PAYMENT_DRIVER') ?: 'stripe');
        }
        return self::$driver->$method(...$args);
    }

    public static function __callStatic(string $method, array $args)
    {
        return (new self())->$method(...$args);
    }

    protected static function resolveDriver(string $name): PaymentDriverInterface
    {
        $drivers = [
            'stripe' => new StripeDriver(),
            'paypal' => new PaypalDriver(),
        ];
        return $drivers[$name] ?? throw new \Exception("Unsupported driver: $name");
    }
}
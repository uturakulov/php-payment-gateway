<?php

namespace PhpPaymentGateway\Drivers;

use PhpPaymentGateway\PaymentDriverInterface;
use Stripe\Charge;
use Stripe\Customer;
use Stripe\Exception\ApiErrorException;
use Stripe\Stripe;

class StripeDriver implements PaymentDriverInterface
{
    protected string $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
        Stripe::setApiKey($this->apiKey);
    }

    /**
     * Создание платежа
     */
    public function pay(array $data)
    {
        try {
            return Charge::create([
                'amount' => $data['amount'],
                'currency' => $data['currency'],
                'source' => $data['token'], // Токен карты или платежный метод
                'description' => $data['description'] ?? 'Payment via PHP Payment Gateway',
            ]);
        } catch (ApiErrorException $e) {
            return ['error' => $e->getMessage()];
        }
    }

    /**
     * Создание покупателя
     */
    public function createCustomer(string $email, string $token)
    {
        try {
            return Customer::create([
                'email' => $email,
                'source' => $token,
            ]);
        } catch (ApiErrorException $e) {
            return ['error' => $e->getMessage()];
        }
    }
}
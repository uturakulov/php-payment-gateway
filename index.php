<?php

require 'vendor/autoload.php';

use PhpPaymentGateway\PaymentGateway;


echo PaymentGateway::pay(100, 'USD', 'user123');

echo PaymentGateway::driver('paypal')->pay(200, 'EUR', 'user456');

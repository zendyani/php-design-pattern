<?php

namespace Strategy;


class PayByPayPal implements PaymentStrategy
{

    public function pay($amount)
    {
        return 'Pay ' . $amount . ' with PayPal';
    }
}
<?php
// it's basically a contract between classes that it have to have to do what they're saying no other manipulation nothing 
// the basic example is payment gateway

interface paymentFunction{
    public function pay(float $amount): bool;
    public function widraw(float $amount): bool;
    public function refund(float $amount): bool;
}

class paymentDone implements paymentFunction{
    public function pay(float $amount): bool{
        echo "Paid $amount via Stripe\n";
        return true;    }
}
class paymentWidrawed implements paymentFunction{
    public function widraw(float $amount): bool{
        echo "Paid $amount via Stripe\n";
        return true;    }
}
class paymentRefunded implements paymentFunction{
    public function refund(float $amount): bool{
        echo "Paid $amount via Stripe\n";
        return true;    }
}
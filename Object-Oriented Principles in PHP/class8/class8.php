<?php

class balance
{
    private $balance;

    public function __construct($balance)
    {
        if ($balance < 0){
            throw new InvalidArgumentException('You have a big debt with us');
        }

        $this->balance = $balance;
    }

    public function increment()
    {
        $this->balance += 300;
    }

    public function get()
    {
        return $this->balance;
    }
}

$balance = new Balance(300);
$age->increment();
var_dump($balance->get());


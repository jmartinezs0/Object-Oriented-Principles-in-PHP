<?php 

interface Magazine
{
    public function suscribe($email);
}

class SportMagazine implements Magazine
{
    public function suscribe($email)
    {
        die('suscribing wit Sport Magazine');
    }
}

class Drip implements Magazine
{
    public function suscribe($email)
    {
        die('suscribing with Drip');
    }
}

class MagazineSubscriptionController
{
    public function store(sportmagazine $sportmagazine)
    {
        $email = 'user1@gmail.com';

        $sportmagazine->subscribe($email);
    }
}

$controller = new MagazineSubscriptionController();

$controller->store(new Drip());
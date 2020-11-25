<?php 

class Telescope
{
   protected $telescopes;

   public function __construct(array $telescopes)
   {
       $this->telescopes = $telecopes;
   }

}

class brands
{
    public $brand;
    public $model;

    public function __construct($brand, $model)
    {

    $this->brand = $brand;
    $this->model = $model;

    }

}

$telescopes = new Telescopes
([
     new Telescope ('Space navigator', 70060),
     new Telescope ('Moon watcher', mk2),

]);

var_dump($telescopes);
<?php

class Workgroup
{
    protected $name;

    protected $position;

    public function __construct($name, $position = [])

    {
        $this->name = $name;
        $this->position = $position;
    }

    public static function start(...$params)
    {
        return new static(...$params);
    }

    public function name()
    {
        return $this->$name;
    }

    public function position()
    {
        return $this->$position;
    }
} 
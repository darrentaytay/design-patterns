<?php

namespace App\Decorator;

abstract class Beverage
{
    protected $description = 'Unknown beverage';

    public function getdescription()
    {
        return $this->description;
    }

    abstract public function cost();
}

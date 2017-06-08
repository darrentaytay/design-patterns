<?php

namespace App\Decorator\Decorators;

use App\Decorator\Beverage;

class SoyDecorator extends CondimentDecorator {

    public function getDescription()
    {
        return sprintf("%s, Soy", $this->beverage->getDescription());
    }

    public function cost()
    {
        return .15 + $this->beverage->cost();
    }

}

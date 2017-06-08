<?php

namespace App\Decorator\Decorators;

use App\Decorator\Beverage;

class WhipDecorator extends CondimentDecorator {

    public function getDescription()
    {
        return sprintf("%s, Whip", $this->beverage->getDescription());
    }

    public function cost()
    {
        return .10 + $this->beverage->cost();
    }

}

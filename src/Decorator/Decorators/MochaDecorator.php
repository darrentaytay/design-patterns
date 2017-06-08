<?php

namespace App\Decorator\Decorators;

class MochaDecorator extends CondimentDecorator
{
    public function getDescription()
    {
        return sprintf('%s, Mocha', $this->beverage->getDescription());
    }

    public function cost()
    {
        return .20 + $this->beverage->cost();
    }
}

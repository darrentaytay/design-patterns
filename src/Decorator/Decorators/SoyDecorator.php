<?php

namespace App\Decorator\Decorators;

class SoyDecorator extends CondimentDecorator
{
    public function getDescription()
    {
        return sprintf('%s, Soy', $this->beverage->getDescription());
    }

    public function cost()
    {
        return .15 + $this->beverage->cost();
    }
}

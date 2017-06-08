<?php

namespace App\Decorator\Decorators;

use App\Decorator\Beverage;

abstract class CondimentDecorator extends Beverage {

    protected $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

}

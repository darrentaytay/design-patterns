<?php

namespace App\Strategy;

use App\Strategy\Behaviours\Fly\FlyNoWay;
use App\Strategy\Behaviours\Quack\Quack;

class ModelDuck extends Duck {

    public function __construct()
    {
        $this->flyBehaviour = new FlyNoWay();
        $this->quackBehaviour = new Quack();
    }

    public function display()
    {
        echo "I'm a model duck!"  . PHP_EOL;
    }

}
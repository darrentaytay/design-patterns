<?php

namespace App\Strategy;

use App\Strategy\Behaviours\Fly\FlyWithWings;
use App\Strategy\Behaviours\Quack\Quack;

class MallardDuck extends Duck {

    public function __construct()
    {
        $this->flyBehaviour = new FlyWithWings();
        $this->quackBehaviour = new Quack();
    }

    public function display()
    {
        echo "I'm a real life Mallard duck!"  . PHP_EOL;
    }

}
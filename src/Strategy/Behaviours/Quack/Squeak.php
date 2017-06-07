<?php

namespace App\Strategy\Behaviours\Quack;

class Squeak implements QuackBehaviourInterface
{
    public function quack()
    {
        echo 'SQUEAK SQUEAK.'.PHP_EOL;
    }
}

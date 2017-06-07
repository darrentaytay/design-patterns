<?php

namespace App\Strategy\Behaviours\Quack;

class Quack implements QuackBehaviourInterface
{
    public function quack()
    {
        echo 'QUACK QUACK.'.PHP_EOL;
    }
}

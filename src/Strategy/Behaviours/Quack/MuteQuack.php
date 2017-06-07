<?php

namespace App\Strategy\Behaviours\Quack;

class MuteQuack implements QuackBehaviourInterface
{
    public function quack()
    {
        echo '.....'.PHP_EOL;
    }
}

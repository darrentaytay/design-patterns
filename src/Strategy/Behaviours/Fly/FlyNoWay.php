<?php

namespace App\Strategy\Behaviours\Fly;

class FlyNoWay implements FlyBehaviourInterface
{
    public function fly()
    {
        echo "I can't fly.".PHP_EOL;
    }
}

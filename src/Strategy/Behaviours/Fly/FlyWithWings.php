<?php

namespace App\Strategy\Behaviours\Fly;

class FlyWithWings implements FlyBehaviourInterface
{
    public function fly()
    {
        echo 'Flying with wings.'.PHP_EOL;
    }
}

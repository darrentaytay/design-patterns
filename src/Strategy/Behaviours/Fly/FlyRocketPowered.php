<?php

namespace App\Strategy\Behaviours\Fly;

class FlyRocketPowered implements FlyBehaviourInterface {

	public function fly()
	{
		echo "I'm flying with a rocket." . PHP_EOL;
	}

}
<?php

namespace App\Strategy;

use App\Strategy\Behaviours\Fly\FlyBehaviourInterface;
use App\Strategy\Behaviours\Quack\QuackBehaviourInterface;

abstract class Duck {
	
	protected $flyBehaviour;

	protected $quackBehaviour;

	public function swim()
	{
		echo 'All ducks float, even decoys!' . PHP_EOL;
	}

	abstract public function display();

	public function performQuack()
	{
		$this->quackBehaviour->quack();
	}

	public function performFly()
	{
		$this->flyBehaviour->fly();
	}

	public function setFlyBehaviour(FlyBehaviourInterface $flyBehaviour)
	{
		$this->flyBehaviour = $flyBehaviour;
	}

	public function setQuackBehaviour(QuackBehaviourInterface $quackBehaviour)
	{
		$this->quackBehaviour = $quackBehaviour;
	}

}
<?php

use App\Strategy\Behaviours\Fly\FlyRocketPowered;
use App\Strategy\MallardDuck;
use App\Strategy\ModelDuck;

require_once '../../vendor/autoload.php';

$mallard = new MallardDuck();
$mallard->performQuack();
$mallard->performFly();

$model = new ModelDuck();
$model->performFly();
$model->setFlyBehaviour(new FlyRocketPowered());
$model->performFly();

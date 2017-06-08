<?php

require_once '../../vendor/autoload.php';

use App\Decorator\DarkRoast;
use App\Decorator\Decorators\MochaDecorator as Mocha;
use App\Decorator\Decorators\SoyDecorator as Soy;
use App\Decorator\Decorators\WhipDecorator as Whip;
use App\Decorator\Espresso;
use App\Decorator\HouseBlend;

$espresso = new Espresso();

echo sprintf('%s - $%s', $espresso->getDescription(), $espresso->cost()).PHP_EOL;

$darkRoast = new DarkRoast();
$darkRoast = new Mocha($darkRoast);
$darkRoast = new Mocha($darkRoast);
$darkRoast = new Whip($darkRoast);

echo sprintf('%s - $%s', $darkRoast->getDescription(), $darkRoast->cost()).PHP_EOL;

$houseBlend = new HouseBlend();
$houseBlend = new Soy($houseBlend);
$houseBlend = new Mocha($houseBlend);
$houseBlend = new Whip($houseBlend);

echo sprintf('%s - $%s', $houseBlend->getDescription(), $houseBlend->cost()).PHP_EOL;

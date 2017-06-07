<?php

require_once '../../vendor/autoload.php';

use App\Observer\WeatherData;
use App\Observer\Displays\CurrentConditionsDisplay;
use App\Observer\Displays\StatisticsDisplay;
use App\Observer\Displays\ForecastDisplay;
use App\Observer\Displays\HeatIndexDisplay;

$weatherData = new WeatherData();

$currentConditionDisplay = new CurrentConditionsDisplay($weatherData);
$statisticsDisplay = new StatisticsDisplay($weatherData);
$forecastDisplay = new ForecastDisplay($weatherData);
$heatIndexDisplay = new HeatIndexDisplay($weatherData);

printHeader('Setting measurements');
$weatherData->setMeasurements(80, 65, 30.4);
printHeader('Setting measurements');
$weatherData->setMeasurements(82, 70, 29.2);
printHeader('Setting measurements');
$weatherData->setMeasurements(78, 90, 29.2);

function printHeader($text)
{
    echo '------------------------' . PHP_EOL;
    echo $text . PHP_EOL;
    echo '------------------------' . PHP_EOL;
}

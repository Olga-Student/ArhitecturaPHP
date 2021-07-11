<?php

namespace Adapter;

use Contract\ICircle;
use Contract\ISquare;
use Lib\CircleAreaLib;
use Lib\SquareAreaLib;
use Service;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^Adapter/', '', $className);
    require_once __DIR__ . $className . '.php';
});

$service = new Service\AdapterClass(new SquareAreaLib(), new CircleAreaLib());


echo $service->circleArea(12) . PHP_EOL;
echo $service->squareArea(5) . PHP_EOL;
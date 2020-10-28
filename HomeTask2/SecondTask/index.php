<?php

use SecondTask\Vehicles\Bike;
use SecondTask\Vehicles\Car;
use SecondTask\Vehicles\Tank;

require_once '../vendor/autoload.php';


$bike = new Bike(0, 2, 'muscle', 'false', 15, 7);

echo 'Count of doors: ' . $bike->getDoorsCount() . '<br>';
echo 'Count of wheels: ' . $bike->getWheelCount() . '<br>';
echo 'Type of motor: ' . $bike->getMotorType() . '<br>';
echo 'Barrel: ' . $bike->fire() .'<br>';

echo 'Bike accelerate speed: ' . $bike->getAccelerate() . '<br>';

echo 'Bike decelerate speed: ' . $bike->getDecelerate() . '<br>';

echo '<br>';

$car = new Car(4, 4, 'motor', 'false', 70, 50);

echo 'Count of doors: ' . $car->getDoorsCount() . '<br>';
echo 'Count of wheels: ' . $car->getWheelCount() . '<br>';
echo 'Type of motor: ' . $car->getMotorType() . '<br>';
echo 'Barrel: ' . $car->fire() .'<br>';

echo 'Car accelerate speed: ' . $car->getAccelerate() . '<br>';

echo 'Car decelerate speed: ' . $car->getDecelerate() . '<br>';

echo '<br>';

$tank = new Tank(0, 2, 'motor', 'true', 30, 20);

echo 'Count of doors: ' . $tank->getDoorsCount() . '<br>';
echo 'Count of wheels: ' . $tank->getWheelCount() . '<br>';
echo 'Type of motor: ' . $tank->getMotorType() . '<br>';
echo 'Barrel: ' . $tank->fire() .'<br>';

echo 'Tank accelerate speed: ' . $tank->getAccelerate() . '<br>';

echo 'Tank decelerate speed: ' . $tank->getDecelerate() . '<br>';

echo '<br>';



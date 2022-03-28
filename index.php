<?php

require_once 'Truck.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Vehicle.php';

$truckOne = new Truck(4000, 'blue', 3, 'fuel');
var_dump($truckOne);

echo $truckOne->forward();
echo '<br>';
echo $truckOne->brake();
echo '<br>';
echo $truckOne-> getFilling();
echo '<br>';
echo $truckOne->is_loaded();

$TruckTwo = new Truck(3000, 'red', 3, 'electric');
var_dump($TruckTwo);

echo $TruckTwo->forward();
echo '<br>';
echo $TruckTwo->brake();
echo '<br>';
echo $TruckTwo->getFilling();
echo '<br>';
echo $TruckTwo->is_loaded();
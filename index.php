<?php

require __DIR__ . '/vendor/autoload.php';

$garage = new Garage();

$vehicleFactory = new \Factory\VehicleFactory();

$garage->addVehicle($vehicleFactory->createVehicle(\Model\Car::class, 'BMW X5'));
$garage->addVehicle($vehicleFactory->createVehicle(\Model\Car::class, 'Toyota Camry'));
$garage->addVehicle($vehicleFactory->createVehicle(\Model\Truck::class, 'Kamaz'));
$garage->addVehicle($vehicleFactory->createVehicle(\Model\Truck::class, 'Belaz'));
$garage->addVehicle($vehicleFactory->createVehicle(\Model\Boat::class, 'Yamahay'));
$garage->addVehicle($vehicleFactory->createVehicle(\Model\Helicopter::class, 'Cobra'));

$garage->introduceVehicles();

<?php

namespace Factory;

use Exception\UnknownVehicleTypeException;
use Model\Boat;
use Model\Car;
use Model\Helicopter;
use Model\Horse;
use Model\Truck;

class VehicleFactory
{
    public function createVehicle($type, $name)
    {
        switch ($type) {
            case Car::class:
                $vehicle = new Car($name);
                break;
            case Truck::class:
                $vehicle = new Truck($name);
                break;
            case Boat::class:
                $vehicle = new Boat($name);
                break;
            case Helicopter::class:
                $vehicle = new Helicopter($name);
                break;
            case Horse::class:
                $vehicle = new Horse($name);
                break;
            default:
                throw new UnknownVehicleTypeException($type);
        }

        $vehicle->setup();
        return $vehicle;
    }
}

<?php

namespace Factory;

use Exception\UnknownVehicleTypeException;
use Model\Boat;
use Model\Car;
use Model\Helicopter;
use Model\Truck;

class VehicleFactory
{
    public function createVehicle($type, $name)
    {
        switch ($type) {
            case Car::class:
                return new Car($name);
            case Truck::class:
                return new Truck($name);
            case Boat::class:
                return new Boat($name);
            case Helicopter::class:
                return new Helicopter($name);
            default:
                throw new UnknownVehicleTypeException($type);
        }
    }
}

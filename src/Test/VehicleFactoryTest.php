<?php

namespace Test;

use Exception\UnknownVehicleTypeException;
use Model\Boat;
use Model\Car;
use Model\Helicopter;
use Model\Truck;
use Model\UnknownVehicle;
use PHPUnit\Framework\TestCase;

class VehicleFactoryTest extends TestCase
{
    public function testCreateVehicle()
    {
        $vehicleFactory = new \Factory\VehicleFactory();

        $car = $vehicleFactory->createVehicle(Car::class, 'Some name');
        self::assertInstanceOf(Car::class, $car);

        $truck = $vehicleFactory->createVehicle(Truck::class, 'Some name');
        self::assertInstanceOf(Truck::class, $truck);

        $boat = $vehicleFactory->createVehicle(Boat::class, 'Some name');
        self::assertInstanceOf(Boat::class, $boat);

        $helicopter = $vehicleFactory->createVehicle(Helicopter::class, 'Some name');
        self::assertInstanceOf(Helicopter::class, $helicopter);

        $this->expectException(UnknownVehicleTypeException::class);
        $vehicleFactory->createVehicle(UnknownVehicle::class, 'Some name');
    }
}
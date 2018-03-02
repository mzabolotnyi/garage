<?php

namespace Test;

use Exception\InvalidFuelException;
use Model\Car;
use Model\Truck;
use Model\UnknownVehicle;
use PHPUnit\Framework\TestCase;

class GasStationTest extends TestCase
{
    public function testRefuelGasWork()
    {
        $gasStation = new \GasStation();
        $vehicleWithGas = new Car('BMW');
        $gasStation->refuelGas($vehicleWithGas);
        $this->addToAssertionCount(1);
    }

    public function testRefuelGasException()
    {
        $gasStation = new \GasStation();
        $vehicleWithoutFuel = new UnknownVehicle('Some name');
        $this->expectException(InvalidFuelException::class);
        $gasStation->refuelGas($vehicleWithoutFuel);
    }

    public function testRefuelDieselWork()
    {
        $gasStation = new \GasStation();
        $vehicleWithDiesel = new Truck('Kamaz');
        $gasStation->refuelDiesel($vehicleWithDiesel);
        $this->addToAssertionCount(1);
    }

    public function testRefuelDieselException()
    {
        $gasStation = new \GasStation();
        $vehicleWithoutFuel = new UnknownVehicle('Some name');
        $this->expectException(InvalidFuelException::class);
        $gasStation->refuelDiesel($vehicleWithoutFuel);
    }
}
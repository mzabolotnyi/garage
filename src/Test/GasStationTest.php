<?php

namespace Test;

use Exception\InvalidFuelException;
use Model\Diesel;
use Model\FuelTank;
use Model\Gas;
use PHPUnit\Framework\TestCase;

class GasStationTest extends TestCase
{
    public function testRefuelGasWork()
    {
        $gasStation = new \GasStation();
        $fuelTank = new FuelTank([Gas::NAME]);
        $gasStation->refuelGas($fuelTank);
        $this->addToAssertionCount(1);
    }

    public function testRefuelGasException()
    {
        $gasStation = new \GasStation();
        $fuelTank = new FuelTank([Diesel::NAME]);
        $this->expectException(InvalidFuelException::class);
        $gasStation->refuelGas($fuelTank);
    }

    public function testRefuelDieselWork()
    {
        $gasStation = new \GasStation();
        $fuelTank = new FuelTank([Diesel::NAME]);
        $gasStation->refuelDiesel($fuelTank);
        $this->addToAssertionCount(1);
    }

    public function testRefuelDieselException()
    {
        $gasStation = new \GasStation();
        $fuelTank = new FuelTank([Gas::NAME]);
        $this->expectException(InvalidFuelException::class);
        $gasStation->refuelDiesel($fuelTank);
    }
}
<?php

namespace Test;

use Model\Boat;
use Model\Car;
use Model\Helicopter;
use Model\Truck;
use PHPUnit\Framework\TestCase;

class GarageTest extends TestCase
{
    public function testAddVehicle()
    {
        $garage = new \Garage([new Car('BMW')]);

        self::assertCount(1, $garage->getVehicles());

        $garage->addVehicle(new Truck('ZIL'));
        $garage->addVehicle(new Boat('Yamaha'));
        $garage->addVehicle(new Helicopter('Akula'));

        self::assertCount(4, $garage->getVehicles());
    }
}
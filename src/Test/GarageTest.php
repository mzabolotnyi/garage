<?php

namespace Test;

use Exception\UnknownVehicleTypeException;
use Model\Boat;
use Model\Car;
use Model\Helicopter;
use Model\Truck;
use Model\UnknownVehicle;
use PHPUnit\Framework\TestCase;

class GarageTest extends TestCase
{
    public function testAddVehicle()
    {
        $garage = new \Garage();

        self::assertCount(0, $garage->getCars());
        self::assertCount(0, $garage->getTrucks());
        self::assertCount(0, $garage->getBoats());
        self::assertCount(0, $garage->getHelicopters());

        $garage->addVehicle(new Car('BMW'));
        $garage->addVehicle(new Car('Audi'));
        $garage->addVehicle(new Car('Toyota'));
        $garage->addVehicle(new Car('Honda'));
        $garage->addVehicle(new Truck('Kamaz'));
        $garage->addVehicle(new Truck('Kraz'));
        $garage->addVehicle(new Truck('ZIL'));
        $garage->addVehicle(new Boat('Sarmat'));
        $garage->addVehicle(new Boat('Yamaha'));
        $garage->addVehicle(new Helicopter('Akula'));

        self::assertCount(4, $garage->getCars());
        self::assertCount(3, $garage->getTrucks());
        self::assertCount(2, $garage->getBoats());
        self::assertCount(1, $garage->getHelicopters());

        $this->expectException(UnknownVehicleTypeException::class);
        $garage->addVehicle(new UnknownVehicle('Some name'));
    }
}
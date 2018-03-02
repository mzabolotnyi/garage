<?php

use Exception\InvalidFuelException;

class GasStation
{
    public function refuelGas(\Model\FuelTank $fuelTank)
    {
        $this->refuel($fuelTank, new \Model\Gas());
    }

    public function refuelDiesel(\Model\FuelTank $fuelTank)
    {
        $this->refuel($fuelTank, new \Model\Diesel());
    }

    private function refuel(\Model\FuelTank $fuelTank, \Model\Fuel $fuel)
    {
        if (!$fuelTank->canRefuel($fuel)) {
            throw new InvalidFuelException($fuel);
        }

        $fuelTank->refuel($fuel);
    }
}

<?php

use Exception\InvalidFuelException;

class GasStation
{
    public function refuelGas(\Model\Vehicle $vehicle)
    {
        $this->refuel($vehicle, new \Model\Gas());
    }

    public function refuelDiesel(\Model\Vehicle $vehicle)
    {
        $this->refuel($vehicle, new \Model\Diesel());
    }

    private function refuel(\Model\Vehicle $vehicle, \Model\Fuel $fuel)
    {
        if (!$vehicle->canRefuel($fuel)) {
            throw new InvalidFuelException($vehicle, $fuel);
        }

        $vehicle->refuel($fuel);
    }
}

<?php

class Garage
{
    /** @var \Model\Vehicle[] */
    private $vehicles;

    public function __construct(array $vehicles = [])
    {
        $this->vehicles = $vehicles;
    }

    public function addVehicle(\Model\Vehicle $vehicle)
    {
        $this->vehicles[] = $vehicle;
    }

    public function getVehicles()
    {
        return $this->vehicles;
    }

    public function introduceVehicles()
    {
        foreach ($this->vehicles as $vehicle) {
            $vehicle->introduce();
        }
    }
}

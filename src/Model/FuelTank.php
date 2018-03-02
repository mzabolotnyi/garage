<?php

namespace Model;

class FuelTank
{
    private $availableFuels;

    public function __construct(array $availableFuels = [])
    {
        $this->availableFuels = $availableFuels;
    }

    public function refuel(Fuel $fuel)
    {
        echo 'Fuel tank refueled with ' . $fuel . '<br/>';
    }

    public function canRefuel(Fuel $fuel)
    {
        return in_array($fuel->getName(), $this->availableFuels);
    }
}

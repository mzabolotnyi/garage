<?php

namespace Model;

abstract class Vehicle implements VehicleInterface
{
    protected $type;
    protected $name;
    protected $availableFuels;

    public function __construct(string $type, string $name)
    {
        $this->type = $type;
        $this->name = $name;
        $this->availableFuels = [];
    }

    public function __toString()
    {
        return $this->getType() . ' ' . $this->getName();
    }

    public function refuel(Fuel $fuel)
    {
        echo $this . ' refuel with ' . $fuel . '<br/>';
    }

    public function canRefuel(Fuel $fuel)
    {
        return is_array($this->availableFuels) && in_array($fuel->getName(), $this->availableFuels);
    }

    public function getType()
    {
        return $this->type;
    }

    public function getName()
    {
        return $this->name;
    }
}

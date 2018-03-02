<?php

namespace Model;

class UnknownVehicle extends Vehicle
{
    public function __construct(string $name)
    {
        parent::__construct('UnknownVehicle', $name);
    }
}

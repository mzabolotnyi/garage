<?php

namespace Exception;

use Model\Fuel;
use Model\Vehicle;

class InvalidFuelException extends \RuntimeException
{
    public function __construct(Vehicle $vehicle, Fuel $fuel)
    {
        $message = $vehicle . ' can not be refueled with ' . $fuel;
        parent::__construct($message);
    }
}

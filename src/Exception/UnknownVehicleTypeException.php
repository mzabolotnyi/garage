<?php

namespace Exception;

class UnknownVehicleTypeException extends \RuntimeException
{
    public function __construct($type)
    {
        $message = 'Unknown vehicle type ' . $type;
        parent::__construct($message);
    }
}

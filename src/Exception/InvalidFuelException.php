<?php

namespace Exception;

use Model\Fuel;

class InvalidFuelException extends \RuntimeException
{
    public function __construct(Fuel $fuel)
    {
        $message = 'Can not be refueled with ' . $fuel;
        parent::__construct($message);
    }
}

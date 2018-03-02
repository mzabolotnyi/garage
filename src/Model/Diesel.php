<?php

namespace Model;

class Diesel extends Fuel
{
    const NAME = 'Diesel';

    public function __construct()
    {
        $this->name = self::NAME;
    }
}

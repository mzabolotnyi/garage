<?php

namespace Model;

class Gas extends Fuel
{
    const NAME = 'Gas';

    public function __construct()
    {
        $this->name = self::NAME;
    }
}

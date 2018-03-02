<?php

namespace Model;

abstract class Fuel
{
    protected $name;

    public function getName()
    {
        return $this->name;
    }

    public function __toString()
    {
        return $this->getName();
    }
}

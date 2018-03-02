<?php

namespace Model;

abstract class Vehicle
{
    protected $type;
    protected $name;

    public function __construct(string $type, string $name)
    {
        $this->type = $type;
        $this->name = $name;
    }

    abstract public function setup();
    abstract public function introduce();

    public function __toString()
    {
        return $this->getType() . ' ' . $this->getName();
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

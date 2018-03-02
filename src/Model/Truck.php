<?php

namespace Model;

class Truck extends Vehicle implements MovableInterface, LoadableInterface
{
    public function __construct(string $name)
    {
        parent::__construct('Truck', $name);
        $this->availableFuels = [Diesel::NAME];
    }

    public function move()
    {
        echo $this . ' moving' . '<br/>';

        return $this;
    }

    public function stop()
    {
        echo $this . ' stopped' . '<br/>';

        return $this;
    }

    public function load()
    {
        echo $this . ' load cargo' . '<br/>';

        return $this;
    }

    public function unload()
    {
        echo $this . ' unload cargo' . '<br/>';

        return $this;
    }
}

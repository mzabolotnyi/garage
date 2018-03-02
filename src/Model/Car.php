<?php

namespace Model;

class Car extends Vehicle implements MovableInterface, PlayableInterface
{
    public function __construct(string $name)
    {
        parent::__construct('Car', $name);
        $this->availableFuels = [Gas::NAME, Diesel::NAME];
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

    public function musicOn()
    {
        echo $this . ' music switched on' . '<br/>';

        return $this;
    }

    public function musicOff()
    {
        echo $this . ' music switched off' . '<br/>';

        return $this;
    }
}

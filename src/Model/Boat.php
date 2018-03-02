<?php

namespace Model;

class Boat extends Vehicle implements MovableInterface, SwimableInterface
{
    public function __construct(string $name)
    {
        parent::__construct('Boat', $name);
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

    public function swim()
    {
        echo $this . ' swimming' . '<br/>';

        return $this;
    }
}

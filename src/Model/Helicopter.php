<?php

namespace Model;

class Helicopter extends Vehicle implements FlyableInterface
{
    public function __construct(string $name)
    {
        parent::__construct('Helicopter', $name);
        $this->availableFuels = [Diesel::NAME];
    }

    public function takeOff()
    {
        echo $this . ' took off' . '<br/>';

        return $this;
    }

    public function fly()
    {
        echo $this . ' flying' . '<br/>';

        return $this;
    }

    public function landing()
    {
        echo $this . ' landing' . '<br/>';

        return $this;
    }
}

<?php

namespace Model;

class Boat extends Vehicle
{
    /** @var BoatEngine */
    public $engine;

    /** @var FuelTank */
    public $fuelTank;

    public function __construct(string $name)
    {
        parent::__construct('Boat', $name);
    }

    public function setup()
    {
        $this->engine = new BoatEngine();
        $this->fuelTank = new FuelTank([Diesel::NAME]);
    }

    public function introduce()
    {
        echo $this . '<br/>';

        $this->engine->start();
        $this->engine->swim();
        $this->engine->stop();

        $gasStation = new \GasStation();
        $gasStation->refuelDiesel($this->fuelTank);

        echo '===============================' . '<br/>';
    }
}

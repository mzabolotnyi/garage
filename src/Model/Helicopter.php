<?php

namespace Model;

class Helicopter extends Vehicle
{
    /** @var Propeller */
    public $engine;

    /** @var FuelTank */
    public $fuelTank;

    public function __construct(string $name)
    {
        parent::__construct('Helicopter', $name);
    }

    public function setup()
    {
        $this->engine = new Propeller();
        $this->fuelTank = new FuelTank([Diesel::NAME]);
    }

    public function introduce()
    {
        echo $this . '<br/>';

        $this->engine->start();
        $this->engine->takeOff();
        $this->engine->fly();
        $this->engine->landing();
        $this->engine->stop();

        $gasStation = new \GasStation();
        $gasStation->refuelDiesel($this->fuelTank);

        echo '===============================' . '<br/>';
    }
}

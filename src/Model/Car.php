<?php

namespace Model;

class Car extends Vehicle
{
    /** @var CarEngine */
    public $engine;

    /** @var MusicPlayer */
    public $musicPayer;

    /** @var FuelTank */
    public $fuelTank;

    public function __construct(string $name)
    {
        parent::__construct('Car', $name);
    }

    public function setup()
    {
        $this->engine = new CarEngine();
        $this->musicPayer = new MusicPlayer();
        $this->fuelTank = new FuelTank([Gas::NAME, Diesel::NAME]);
    }

    public function introduce()
    {
        echo $this . '<br/>';

        $this->engine->start();
        $this->engine->drive();
        $this->musicPayer->musicOn();
        $this->musicPayer->musicOff();
        $this->engine->stop();

        $gasStation = new \GasStation();
        $gasStation->refuelGas($this->fuelTank);

        echo '===============================' . '<br/>';
    }
}

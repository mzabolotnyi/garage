<?php

namespace Model;

class Truck extends Vehicle
{
    /** @var CarEngine */
    public $engine;

    /** @var CargoBody */
    public $cargoBody;

    /** @var FuelTank */
    public $fuelTank;

    public function __construct(string $name)
    {
        parent::__construct('Truck', $name);
    }

    public function setup()
    {
        $this->engine = new CarEngine();
        $this->cargoBody = new CargoBody();
        $this->fuelTank = new FuelTank([Diesel::NAME]);
    }

    public function introduce()
    {
        echo $this . '<br/>';

        $this->cargoBody->load();
        $this->engine->start();
        $this->engine->drive();
        $this->engine->stop();
        $this->cargoBody->unload();

        $gasStation = new \GasStation();
        $gasStation->refuelDiesel($this->fuelTank);

        echo '===============================' . '<br/>';
    }
}

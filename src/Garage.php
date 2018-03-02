<?php

class Garage
{
    /** @var \GasStation */
    private $gasStation;

    /** @var \Model\Car[] */
    private $cars;
    /** @var \Model\Truck[] */
    private $trucks;
    /** @var \Model\Boat[] */
    private $boats;
    /** @var \Model\Helicopter[] */
    private $helicopters;

    public function __construct()
    {
        $this->gasStation = new \GasStation();
        $this->cars = [];
        $this->trucks = [];
        $this->boats = [];
        $this->helicopters = [];
    }

    public function addVehicle(\Model\Vehicle $vehicle)
    {
        $type = get_class($vehicle);

        switch (get_class($vehicle)) {
            case \Model\Car::class:
                $this->cars[] = $vehicle;
                break;
            case \Model\Truck::class:
                $this->trucks[] = $vehicle;
                break;
            case \Model\Boat::class:
                $this->boats[] = $vehicle;
                break;
            case \Model\Helicopter::class:
                $this->helicopters[] = $vehicle;
                break;
            default:
                throw new \Exception\UnknownVehicleTypeException($type);
        }
    }

    public function getCars()
    {
        return $this->cars;
    }

    public function getTrucks()
    {
        return $this->trucks;
    }

    public function getBoats()
    {
        return $this->boats;
    }

    public function getHelicopters()
    {
        return $this->helicopters;
    }

    public function introduceVehicles()
    {
        $this->introduceCars();
        $this->introduceTrucks();
        $this->introduceBoats();
        $this->introduceHelicopters();
    }

    private function introduceCars()
    {
        foreach ($this->cars as $car) {

            $car->move()
                ->musicOn()
                ->musicOff()
                ->stop();

            $this->gasStation->refuelGas($car);

            echo '===============================' . '<br/>';
        }
    }

    private function introduceTrucks()
    {
        foreach ($this->trucks as $truck) {

            $truck->load()
                ->move()
                ->stop()
                ->unload();

            $this->gasStation->refuelDiesel($truck);

            echo '===============================' . '<br/>';
        }
    }

    private function introduceBoats()
    {
        foreach ($this->boats as $boat) {

            $boat->move()
                ->swim()
                ->stop();

            $this->gasStation->refuelDiesel($boat);

            echo '===============================' . '<br/>';
        }
    }

    private function introduceHelicopters()
    {
        foreach ($this->helicopters as $helicopter) {

            $helicopter->takeOff()
                ->fly()
                ->landing();

            $this->gasStation->refuelDiesel($helicopter);

            echo '===============================' . '<br/>';
        }
    }
}

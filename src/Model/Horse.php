<?php

namespace Model;

class Horse extends Vehicle
{
    /** @var Foot */
    public $foots;

    /** @var Head */
    public $head;

    public function __construct(string $name)
    {
        parent::__construct('Horse', $name);
    }

    public function setup()
    {
        $this->foots = new Foot();
        $this->head = new Head('IGOGOGO');
    }

    public function introduce()
    {
        echo $this . '<br/>';

        $this->foots->move();
        $this->head->makeSound();
        $this->head->makeSound();
        $this->foots->stop();

        echo '===============================' . '<br/>';
    }
}

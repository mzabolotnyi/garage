<?php

namespace Model;

class Propeller extends Engine
{
    public function takeOff()
    {
        echo 'Took off' . '<br/>';
    }

    public function fly()
    {
        echo 'Flying...' . '<br/>';
    }

    public function landing()
    {
        echo 'Landing' . '<br/>';
    }
}

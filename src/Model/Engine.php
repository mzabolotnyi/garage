<?php

namespace Model;

abstract class Engine
{
    public function start()
    {
        echo 'Engine started' . '<br/>';
    }

    public function stop()
    {
        echo 'Engine stopped' . '<br/>';
    }
}

<?php

namespace Model;

interface FlyableInterface
{
    public function takeOff();
    public function fly();
    public function landing();
}

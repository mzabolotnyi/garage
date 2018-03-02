<?php

namespace Model;

class Head
{
    private $sound;

    public function __construct(string $sound)
    {
        $this->sound = $sound;
    }

    public function makeSound()
    {
        echo $this->sound . '<br/>';
    }
}

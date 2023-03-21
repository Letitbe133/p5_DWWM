<?php

namespace App\classes;

class Test
{
    public function __construct()
    {
        echo 'Hello from Test Class';
    }

    public function getDate()
    {
        return new \DateTime();
    }
}

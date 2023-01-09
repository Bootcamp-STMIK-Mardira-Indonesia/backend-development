<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    var string $color;

    function __construct(string $wheels, string $color)
    {
        $this->color = $color;
        parent::__construct($wheels);
        $this->stop();
    }

    function stop(): void
    {
        echo "Kendaraan Berhenti <br>";
    }
}

$car = new Car(4, 'Red');

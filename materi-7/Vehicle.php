<?php

class Vehicle
{
    var int $wheels;

    function __construct(string $wheels)
    {
        $this->wheels = $wheels;
        $this->move();
        $this->getWheels();
    }

    function move(): void
    {
        echo "Kendaraan Berjalan <br>";
    }

    function getWheels(): void
    {
        echo "Jumlah Roda: " . $this->wheels . "<br>";
    }
}

$vehicle = new Vehicle(4);

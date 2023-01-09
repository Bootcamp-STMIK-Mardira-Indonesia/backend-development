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

<?php

interface HasEngine
{
    public function setEngine($engine): string;
}

interface HasTire
{
    public function setTire($tire): string;
}

interface HasMethod extends HasEngine, HasTire
{
}

abstract class Vehicle
{
    abstract public function setType($type): string;
}

class Car extends Vehicle implements HasMethod
{
    public function setTire($tire): string
    {
        return "Mobil mempunyai {$tire} ban <br>";
    }

    public function setEngine($engine): string
    {
        return "Mobil mempunyai mesin {$engine} <br>";
    }

    public function setType($type): string
    {
        return "Mobil ini adalah {$type} <br>";
    }
}

$car = new Car();
echo $car->setTire(4);
echo $car->setEngine('1.5L');
echo $car->setType('Sedan');

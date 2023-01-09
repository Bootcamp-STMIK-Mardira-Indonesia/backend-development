<?php

abstract class Shape
{
    public string $name;
    public string $color;

    abstract public function area(): float;
}

class Square extends Shape
{
    public float $length = 0;

    public function area(): float
    {
        return pow($this->length, 2);
    }
}

$square = new Square();
$square->length = 4;
echo $square->area();

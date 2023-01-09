<?php

class MotorCyle
{
    var string $brand;
    var string $model;
    var string $color;

    public function __construct(string $brand, string $model, string $color)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
        $this->getInfo();
    }

    public function getInfo(): void
    {
        echo "Brand: {$this->brand} <br>";
        echo "Model: {$this->model} <br>";
        echo "Color: {$this->color} <br>";
    }
}

$myMotorCyle = new MotorCyle('Honda', 'CBR 150R', 'Red');

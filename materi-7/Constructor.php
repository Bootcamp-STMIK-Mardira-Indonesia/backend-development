<?php

class MotorCyle
{
    var string $brand;
    var string $model;
    var string $color;

    function __construct(string $brand, string $model, string $color)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
    }

    function getAllProperties(): string
    {
        return "Brand: $this->brand, Model: $this->model, Color: $this->color";
    }
}

$myMotorCyle = new MotorCyle('Honda', 'CBR 150R', 'Red');
echo $myMotorCyle->getAllProperties();

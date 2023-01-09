<?php

class MotorCyle
{
    var string $brand;
    var string $model;
    var string $color;

    function getBrand(string $brand): string
    {
        return $this->brand = $brand;
    }

    function getModel(string $model): string
    {
        return $this->model = $model;
    }

    function getColor(string $color): string
    {
        return $this->color = $color;
    }

    function getAllProperties(): string
    {
        return "Brand: $this->brand, Model: $this->model, Color: $this->color";
    }
}

$myMotorCyle = new MotorCyle();
$myMotorCyle->getBrand('Honda');
$myMotorCyle->getModel('CBR 150R');
$myMotorCyle->getColor('Red');
echo $myMotorCyle->getAllProperties();

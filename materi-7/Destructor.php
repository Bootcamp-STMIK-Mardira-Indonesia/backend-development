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

    function __destruct()
    {
        echo "Object $this->brand telah dihapus <br>";
    }
}

$honda = new MotorCyle('Honda', 'CBR 150R', 'Red');
$yamaha = new MotorCyle('Yamaha', 'NMAX', 'Black');
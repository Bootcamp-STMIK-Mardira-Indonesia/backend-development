<?php

class Car
{
    var $color;
    var $type;
    var $tires;
}

$car = new Car();
$car->color = 'cyan';
$car->type = 'sedan';
$car->tires = 4;

echo "Warna mobil: {$car->color}<br>";
echo "Tipe mobil: {$car->type}<br>";
echo "Jumlah ban: {$car->tires}<br>";

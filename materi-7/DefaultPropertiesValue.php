<?php

class Car
{
    var $color = 'cyan';
    var $type = 'sedan';
    var $tires  = 4;
}

$car = new Car();

echo "Warna mobil: {$car->color}<br>";
echo "Tipe mobil: {$car->type}<br>";
echo "Jumlah ban: {$car->tires}<br>";

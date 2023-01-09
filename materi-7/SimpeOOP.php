<?php

class Car
{
    var $tires = 4;
    var $color = "cyan";
    var $type = "sedan";

    function move()
    {
        return "Mobil bergerak";
    }

    function stop()
    {
        return "Mobil berhenti";
    }

    function turnLeft()
    {
        return "Mobil belok kiri";
    }

    function turnRight()
    {
        return "Mobil belok kanan";
    }
}

$car = new Car();
echo "Mobil berwarna {$car->color}, memiliki {$car->tires}
ban dan bertipe {$car->type} <br>";
echo "Mobil bergerak dengan cara " . $car->move() . "<br>";
echo "Mobil berhenti dengan cara " . $car->stop() . "<br>";
echo "Mobil belok kiri dengan cara " . $car->turnLeft() . "<br>";
echo "Mobil belok kanan dengan cara " . $car->turnRight() . "<br>";

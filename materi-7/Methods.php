<?php

class Car
{
    function move()
    {
        return 'Mobil bergerak';
    }

    function stop()
    {
        return 'Mobil berhenti';
    }

    function turnLeft()
    {
        return 'Mobil belok kiri';
    }

    function turnRight()
    {
        return 'Mobil belok kanan';
    }
}

$car = new car();
echo $car->move();
echo $car->stop();
echo $car->turnLeft();
echo $car->turnRight();
<?php

class Car
{
    var string $color = 'cyan';
    var string $type = 'sedan';
    var int $tires = 4;
    var bool $isRunning = false;
}

$car = new Car();
echo "Mobil berwarna {$car->color} <br>";
echo "Mobil berjenis {$car->type} <br>";
echo "Mobil memiliki {$car->tires} ban <br>";
if ($car->isRunning) {
    echo "Mobil sedang berjalan <br>";
} else {
    echo "Mobil sedang berhenti <br>";
}

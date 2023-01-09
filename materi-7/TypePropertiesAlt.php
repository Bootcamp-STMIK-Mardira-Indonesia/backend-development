<?php

class Car
{
    var string $owner = null;
}

$car = new Car();
$car->owner = 'John';

echo "Owner: $car->owner";

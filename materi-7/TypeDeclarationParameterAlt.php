<?php

class Person
{
    function getName(string $name)
    {
        return $name;
    }

    function getAge(int $age)
    {
        return $age;
    }

    function getWeight(float $weight)
    {
        return $weight;
    }

    function getMarried(bool $married)
    {
        return $married;
    }

    function getChildren(array $children)
    {
        return $children;
    }

    function getCar(object $car)
    {
        $car->brand = 'BMW';
        $car->model = 'X5';
        return $car;
    }
}

class Car
{
    var $brand;
    var $model;
}

$person = new Person();

// Output

echo "<pre>";
var_dump($person->getName('John')); // John
var_dump($person->getAge(25)); // 25\
var_dump($person->getWeight(75.5)); // 75.5
var_dump($person->getMarried(true)); // 1
var_dump($person->getChildren(['John', 'Mary'])) . PHP_EOL; // Array
var_dump($person->getCar(new Car())); // Car Object
echo "</pre>";
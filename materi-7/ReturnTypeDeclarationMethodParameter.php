<?php

class Person
{
    function getName(string $firstName): string #static parameter
    {
        return $firstName;
    }

    function getAge(int $age): int
    {
        return $age;
    }

    function getWeight(float $weight): float
    {
        return $weight;
    }

    function getMarried(bool $married): bool
    {
        return $married;
    }

    function getChildren(array $children): array
    {
        return $children;
    }

    function getCar(object $car): object
    {
        $car->brand = 'BMW';
        $car->model = 'X5';
        return $car;
    }

    function sayHello(): void
    {
        echo "Hello";
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
var_dump($person->getAge(25)); // 25
var_dump($person->getWeight(75.5)); // 75.5
var_dump($person->getMarried(true)); // 1
var_dump($person->getChildren(['John', 'Mary'])); // Array
var_dump($person->getCar(new Car())); // Car Object
$person->sayHello(); // Hello
echo "</pre>";

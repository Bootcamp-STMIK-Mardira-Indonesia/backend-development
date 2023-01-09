<?php

class Person
{
    var string $name;
    var int $age;

    function getPerson(): string
    {
        return "Nama: {$this->name} dan Umur: {$this->age}";
    }

    function setPerson(string $name, int $age): void
    {
        $this->name = $name;
        $this->age = $age;
    }

    function call() : void
    {
        $this->setPerson('John', 25);
        echo $this->getPerson();
    }
}

$person = new Person();
// $person->call();
$this->call();
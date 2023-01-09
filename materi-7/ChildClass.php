<?php

class Son extends Father
{
    var int $age;

    function __construct(string $name, string $address, int $age)
    {
        parent::__construct($name, $address);
        $this->age = $age;
        $this->getProperties();
    }

    function getProperties(): void
    {
        echo "Name: " . $this->name . ", Address: " . $this->address . ", Age: " . $this->age;
    }
}

$son = new Son("Dennis", "USA", 15);

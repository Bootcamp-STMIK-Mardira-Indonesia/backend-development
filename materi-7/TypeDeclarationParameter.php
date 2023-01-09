<?php

class Person
{
    function getName(string $name)
    {
        return $name;
    }
}

$person = new Person();
echo $person->getName('John');

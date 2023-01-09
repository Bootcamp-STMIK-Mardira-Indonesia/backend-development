<?php

class Person
{
    function getName($firstName, $lastName)
    {
        return "Nama saya adalah {$firstName} {$lastName}";
    }
}

$person = new Person();
echo $person->getName("Rizky");


<?php

class Person
{
    function getName(string $firstName)
    {
        return "Nama saya adalah {$firstName}";
    }
}

$person = new Person();
echo $person->getName(['name' => 'Rizky']);

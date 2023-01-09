<?php

class Person
{
    function getName(): string
    {
        return 'John Doe';
    }
}

$person = new Person();
echo $person->getName();

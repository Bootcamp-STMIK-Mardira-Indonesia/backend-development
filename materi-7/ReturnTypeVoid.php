<?php

class Person
{
    // return void type
    function getFirstName(): void
    {
        if ($this->getLastName() == 'Doe') {
            echo 'John';
        } else {
            echo 'Jane';
        }
    }

    // return string type
    function getLastName(): string
    {
        return 'Doe';
    }
}

$person = new Person();
$person->getFirstName();


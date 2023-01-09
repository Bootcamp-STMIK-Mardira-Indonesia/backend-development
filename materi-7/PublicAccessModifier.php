<?php

class Person
{
    public string $name;

    public function publicIssue(): void
    {
        echo "Masalah Publik <br>";
    }
}

$person = new Person();
$person->publicIssue();


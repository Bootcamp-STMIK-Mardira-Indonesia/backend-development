<?php

class Person
{
    private int $money = 0;

    function call(): void
    {
        if ($this->personalIssue()) {
            echo "Masalah pribadi";
        } else {
            echo "Tidak ada masalah pribadi";
        }
    }

    private function personalIssue(): bool
    {
        if ($this->money < 100) {
            return true;
        } else {
            return false;
        }
    }
}

$person = new Person();
$person->call();

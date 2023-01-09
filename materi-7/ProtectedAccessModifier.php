<?php

class Father
{
    protected string $address;

    protected function familyIssue(): void
    {
        echo "Masalah Keluarga <br>";
    }
}

$father = new Father();
$father->familyIssue();


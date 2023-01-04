<?php

class Aritmetic
{
    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function addition()
    {
        return $this->a + $this->b . PHP_EOL;
    }

    public function substraction()
    {
        return $this->a - $this->b . PHP_EOL;
    }

    public function multiplication()
    {
        return $this->a * $this->b . PHP_EOL;
    }
}

$aritmetic = new Aritmetic(10, 5);
echo $aritmetic->addition();
echo $aritmetic->substraction();
echo $aritmetic->multiplication();

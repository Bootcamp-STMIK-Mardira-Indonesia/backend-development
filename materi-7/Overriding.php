<?php

class Animal
{
    public function eat(): void
    {
        echo "Hewan ini makan <br>";
    }
}

class Cat extends Animal
{
    public function eat(): void
    {
        echo "Kucing ini makan ikan<br>";
    }
}

class Fish extends Animal
{
    public function eat(): void
    {
        echo "Ikan ini makan plankton<br>";
    }

}

$animal = new Animal();
$cat = new Cat();
$fish = new Fish();

$animal->eat(); // Hewan ini makan
$cat->eat(); // Kucing ini makan ikan
$fish->eat(); // Ikan ini makan plankton


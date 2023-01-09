<?php

class Person
{
    public string $name;
    protected string $address;
    private int $age;

    public function getPerson(string $name): string
    {
        return $name;
    }

    protected function getAddress(string $address): string
    {
        return $address;
    }

    private function getAge(int $age): int
    {
        return $age;
    }
}

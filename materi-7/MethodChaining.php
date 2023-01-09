<?php

class Chain
{
    public function chainOne(): Chain
    {
        echo "Sambungan Pertama <br>";
        return $this;
    }

    public function chainTwo(): Chain
    {
        echo "Sambungan 2<br>";
        return $this;
    }

    public function chainThree(): Chain
    {
        echo "Sambungan 3<br>";
        return $this;
    }
}

$chain = new Chain();
$chain->chainOne()
    ->chainTwo()
    ->chainThree();

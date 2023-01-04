<?php

echo "<pre>";
// expression statement
$a = 1 + 1 * 10 - 2 / 1;
var_dump($a);

// expression statement addition
$b = $a + 1;
var_dump($b);

// expression statement subtraction
$c = $a - $b;
var_dump($c);

// expression statement multiplication & division
$d = $a / $b * $c;
var_dump($d);

// expression statement comparison
$e = $b > $c;
var_dump($e);
echo "</pre>";

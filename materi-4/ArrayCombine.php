<?php

// array pertama menjadi key
$keys = ['name', 'color'];
// array kedua menjadi value
$values = ['apple', 'red', 'yellow'];

$fruits = array_combine($keys, $values);
echo "<pre>";
print_r($fruits);
echo "</pre>";

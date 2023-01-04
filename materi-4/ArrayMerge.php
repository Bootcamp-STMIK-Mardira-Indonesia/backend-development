<?php

$fruits = [
    'name' => 'apple',
];

$types  = [
    'color' => 'red',
];

$merged = array_merge($fruits, $types);
echo "<pre>";
print_r($merged);
echo "</pre>";

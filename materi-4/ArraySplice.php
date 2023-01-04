<?php

$colors = [
    'red',
    'green',
    'blue',
    'yellow',
];

$otherColors = [
    'purple',
    'orange',
];

array_splice($colors, 1, 2, $otherColors);
echo "<pre>";
print_r($colors);
echo "</pre>";

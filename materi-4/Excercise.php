<?php

$passengers = [
    'John',
    'Jennie'
];

$halteA = [
    'Ahmad',
    'Budi',
    'Caca'
];

$halteB = [
    'Dedi'
];

$halteC = [
    'Felicia',
    'Gina'
];

echo "<pre>";
echo "Jumlah penumpang bus: " . count($passengers) . PHP_EOL;
echo "Penumpang bus: " . PHP_EOL;
print_r($passengers);

echo "Halte A :" . PHP_EOL;

echo "Jumlah penumpang bus yang turun: " . count($passengers) . PHP_EOL;
echo "Penumpang bus yang turun : " . PHP_EOL;
print_r($passengers);
echo "Jumlah penumpang bus yang naik: " . count($halteA) . PHP_EOL;
echo "Penumpang bus yang naik : " . PHP_EOL;
array_splice($passengers, 0, 2, $halteA);

print_r($halteA);
echo "Jumlah penumpang bus sekarang: " . count($passengers) . PHP_EOL;
echo "Penumpang bus sekarang : " . PHP_EOL;
print_r($passengers);

$passengersRemaining = array_merge(array_slice($passengers, 2), $halteB);
array_splice($passengers, 2);
echo "Halte B :" . PHP_EOL;
echo "Jumlah penumpang bus yang turun: " . count($passengers) . PHP_EOL;
echo "Penumpang bus yang turun : " . PHP_EOL;
print_r($passengers);
echo "Jumlah penumpang bus yang naik: " . count($halteB) . PHP_EOL;
echo "Penumpang bus yang naik : " . PHP_EOL;
print_r($halteB);
echo "Jumlah penumpang bus sekarang: " . count($passengers) . PHP_EOL;
echo "Penumpang bus sekarang : " . PHP_EOL;
array_splice($passengers, 0, 2, $passengersRemaining);
print_r($passengers);

echo "Halte C :" . PHP_EOL;
echo "Jumlah penumpang bus yang turun: " . count($passengers) . PHP_EOL;
echo "Penumpang bus yang turun : " . PHP_EOL;
print_r($passengers);
echo "Jumlah penumpang bus yang naik: " . count($halteC) . PHP_EOL;
echo "Penumpang bus yang naik : " . PHP_EOL;
print_r($halteC);
echo "</pre>";


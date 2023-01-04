<?php

$firstName = 'Jefri';
// menggunakan single quotes
$lastName = 'Maruli';
// menggunakan double quotes

$street = "Jl. Soekarno Hatta";
$City = "Bandung";
// menggabungkan string single quotes dengan menggunkan tanda titik (.)
$fullName = $firstName .''.$lastName . '<br>';
// menggabungkan string double quotes dengan menggunakan tanda bracket ({})
$Address = "{$street}, {$City}";

echo $fullName;
echo $address;

var_dump($fullName);
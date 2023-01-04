<?php

$students = [
    'Arya',
    'Bayu',
    'Chandra',
    'Deni',
];

array_unshift($students, 'Aji', 'Budi', 'Caca');
echo "<pre>";
print_r($students);
echo "</pre>";

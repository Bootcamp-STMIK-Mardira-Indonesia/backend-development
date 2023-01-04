<?php

$students = [
    'Arya',
    'Assipa',
    'Bayu',
    'Chandra'
];

$student = [
    'name' => 'Deni',
    'age' => 20,
    'address' => 'Jl. Kaliurang KM 14',
    'hobbies' => ['Coding', 'Reading', 'Travelling'],
];
// Array Push
array_push($students, $student);
// array_pop($students);
echo "<pre>";
print_r($students);
echo "</pre>";

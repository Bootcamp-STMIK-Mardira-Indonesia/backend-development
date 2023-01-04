<?php

$students = [
    'name' => 'John',
    'subjects' => [
        'maths' => 80,
        'science' => 90,
    ],
];

$marks = [
    'subjects' => [
        'maths' => 85,
        'english' => 95,
    ],
];

$merged = array_merge_recursive($students, $marks);
echo "<pre>";
print_r($merged);
echo "</pre>";

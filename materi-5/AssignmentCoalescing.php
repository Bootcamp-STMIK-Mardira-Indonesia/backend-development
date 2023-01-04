<?php

$string = null;

// Cara biasa mengecek nilai null dengan statement
if (isset($string)) {
    $string = 'hi';
} else {
    $string = 'Hello World';
}

//  Null Coalescing standar
$string = $string ?? 'Hello World';

// Null Coalescing dengan operator penugasan
$string ??= 'Hello World';

echo "Hasil : {$string}";

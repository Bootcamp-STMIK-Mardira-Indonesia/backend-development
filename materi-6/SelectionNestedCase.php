<?php

// condition if else with nested case

$attendance = 90;
$marks = 80;

if ($attendance >= 90) {
    if ($marks >= 80) {
        echo "You are eligible for scholarship";
    } else {
        echo "You are not eligible for scholarship";
    }
} else {
    echo "You are not eligible for scholarship";
}
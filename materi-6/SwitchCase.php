<?php

$marks = 50;

switch ($marks) {
    case ($marks >= 85):
        echo "Indeks = A";
        break;
    case ($marks >= 75):
        echo "Indeks = B";
        break;
    case ($marks >= 65):
        echo "Indeks = C";
        break;
    case ($marks >= 55):
        echo "Indeks = D";
        break;
    case ($marks >= 45):
        echo "Indeks = E";
        break;
    default:
        echo "Indeks = F";
        break;
}

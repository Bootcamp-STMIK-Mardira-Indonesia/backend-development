<?php

// Kondisi menggunakan operator logika AND
$waterTemperature = 10;

if ($waterTemperature > 0 && $waterTemperature < 30) {
    echo "Hasil Suhur Air : Dingin<br>"; #TRUE && TRUE
}

// Kondisi menggunakan operator logika OR
$trafficLight = "red";

if ($trafficLight == "red" || $trafficLight == "yellow") {
    echo "Rambu Lalu Lintas : Berhenti <br>"; #TRUE || FALSE
}

// Kondisi menggunakan operator logika NOT
$waterTemperature = 10;

if (!($waterTemperature > 0 && $waterTemperature < 30)) {
    echo "Hasil Suhur Air : Dingin"; #FALSE && TRUE
}

// Kondisi menggunakan operator logika XOR
$trafficLight = "red";

if ($trafficLight == "red" xor $trafficLight == "red") {
    echo "Rambu Lalu Lintas : Berhenti <br>"; #TRUE XOR TRUE
}



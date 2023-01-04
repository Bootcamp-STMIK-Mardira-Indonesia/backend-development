<?php

$waterTemperature = 10;


if ($waterTemperature > 0 && $waterTemperature < 30 && $waterTemperature != NULL) {
    echo "Hasil Suhur Air : Dingin<br>"; #TRUE && TRUE && TRUE
}

// Kondisi menggunakan operator logika OR

$trafficLight = "red";

if ($trafficLight == "red" || $trafficLight == "yellow" || $trafficLight == "green") {
    echo "Rambu Lalu Lintas : Berhenti <br>"; #TRUE || FALSE || FALSE
}

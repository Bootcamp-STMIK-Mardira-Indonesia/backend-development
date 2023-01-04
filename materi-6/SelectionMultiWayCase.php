<?php

$waterTemperature = 10;

if ($waterTemperature > 0 && $waterTemperature < 30 && $waterTemperature != NULL) {
    echo "Hasil Suhur Air : Dingin<br>"; #TRUE && TRUE && TRUE
} elseif ($waterTemperature > 30 && $waterTemperature < 50 && $waterTemperature != NULL) {
    echo "Hasil Suhur Air : Hangat<br>"; #FALSE && TRUE && TRUE
} elseif ($waterTemperature > 50 && $waterTemperature < 100     && $waterTemperature != NULL) {
    echo "Hasil Suhur Air : Panas<br>"; #FALSE && TRUE && TRUE
} else {
    echo "Hasil Suhur Air : Tidak Diketahui<br>"; #FALSE
}

// Kondisi menggunakan operator logika OR

$trafficLight = "red";

if ($trafficLight == "red" || $trafficLight == "yellow" || $trafficLight == "green") {
    echo "Rambu Lalu Lintas : Berhenti <br>"; #TRUE || FALSE || FALSE
} elseif ($trafficLight == "yellow" || $trafficLight == "green" || $trafficLight == "red") {
    echo "Rambu Lalu Lintas : Hati-hati <br>"; #FALSE || FALSE || TRUE
} elseif ($trafficLight == "green" || $trafficLight == "red" || $trafficLight == "yellow") {
    echo "Rambu Lalu Lintas : Maju <br>"; #FALSE || TRUE || FALSE
} else {
    echo "Rambu Lalu Lintas : Tidak Diketahui <br>"; # FALSE
}

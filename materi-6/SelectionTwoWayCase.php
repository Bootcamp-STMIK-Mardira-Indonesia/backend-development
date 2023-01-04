<?php

$waterTemperature = 10;

if ($waterTemperature > 0 && $waterTemperature < 30) {
    echo "Hasil Suhur Air : Dingin<br>"; #TRUE && TRUE
} else {
    echo "Hasil Suhur Air : Panas<br>"; #FALSE && TRUE
    echo "Hasil Suhur Air : Panas<br>"; #FALSE && TRUE
}

// Kondisi Terbalik
if ($waterTemperature > 0 && $waterTemperature > 30) {
    echo "Hasil Suhur Air : Panas<br>"; #TRUE && FALSE
} else {
    echo "Hasil Suhur Air : Dingin<br>"; #FALSE && FALSE
}

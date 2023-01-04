<?php

$x = 5;
switch ($x) {
    case 1:
        echo "x bernilai 1";
        break;
    case 2:
        echo "x bernilai 2";
        break;
    case 3:
        switch ($x) {
            case 3:
                echo "x bernilai 3";
                break;
            case 4:
                echo "x bernilai 4";
                break;
            default:
                echo "x tidak bernilai 3 atau 4";
                break;
        }
        break;
    default:
        echo "x tidak bernilai 1";
        break;
}

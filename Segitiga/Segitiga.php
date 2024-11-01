<?php
$x = 5;

for ($i = 1; $i <= $x; $i++) {
    // Cetak spasi
    for ($j = $x; $j > $i; $j--) {
        echo " ";
    }
    // Cetak bintang
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    echo "\n";
}
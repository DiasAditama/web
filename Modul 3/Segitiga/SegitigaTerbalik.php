<?php
$x = 5;

for ($i = $x; $i >= 1; $i--) {
    for ($j = $x; $j > $i; $j--) {
        echo " ";
    }

    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    echo "\n";
}

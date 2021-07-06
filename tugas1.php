<?php
    $bil1 = 0;
    $bil2 = 1;
    $totbil = 0;

    for ($i = 0; $i <= 20 + 1; $i++){
        echo $bil1;
        echo " ";
        $totbil = $bil1 + $bil2;
        // swap
        $bil1=$bil2;
        $bil2=$totbil;
    }
?>
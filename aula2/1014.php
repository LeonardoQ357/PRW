<?php
    $x = readline();
    $y = readline();
    $y = number_format($y, 1, ".", "");
    $r = $x/$y;
    $r = number_format($r, 3, ".", "");

    echo "$r km/l\n";
?>
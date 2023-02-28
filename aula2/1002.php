<?php
    $n = 3.14159;
    $r = fgets (STDIN);
    $a = $n * ($r*$r);
    $a = number_format($a, 4, ".", "");

    echo "A=$a\n"
?>

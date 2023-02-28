<?php
    $n1 = readline();
    $n2 = readline();
    $n3 = readline();
    $m = ($n1*2+$n2*3+$n3*5)/10;
    $m = number_format($m, 1, ".", "");

    echo "MEDIA = $m\n";
?>
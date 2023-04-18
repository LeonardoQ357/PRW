<?php
    $l1 = readline();
    $l2 = readline();

    $val1 = explode(' ',$l1);
    $x1 = floatval($val1[0]);
    $y1 = floatval($val1[1]);

    $val2 = explode(' ',$l2);
    $x2 = floatval($val2[0]);
    $y2 = floatval($val2[1]);

    $d = (($x2-$x1)*($x2-$x1))+(($y2-$y1)*($y2-$y1));
    $dr = sqrt($d);
    $dr = number_format($dr, 4, ".", "");
    
    echo "$dr\n";
?>
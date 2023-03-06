<?php
    $l1 = readline();

    $val1 = explode(' ',$l1);
    $a = floatval($val1[0]);
    $b = floatval($val1[1]);
    $c = floatval($val1[2]);


    $tri = ($a*$c)/2;
    $tri = number_format($tri, 3, ".", "");

    $cir = 3.14159*($c*$c);
    $cir = number_format($cir, 3, ".", "");

    $tra = ($a + $b)*$c/2;
    $tra = number_format($tra, 3, ".", "");

    $qua = $b*$b;
    $qua = number_format($qua, 3, ".", "");

    $ret = $a * $b;
    $ret = number_format($ret, 3, ".", "");

    echo "TRIANGULO: $tri\nCIRCULO: $cir\nTRAPEZIO: $tra\nQUADRADO: $qua\nRETANGULO: $ret\n";
?>
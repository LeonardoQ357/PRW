<?php
    $l1 = readline();

    $val1 = explode(' ',$l1);
    $a = intval($val1[0]);
    $b = intval($val1[1]);
    $c = intval($val1[2]);

    $mab = ($a+$b+abs($a-$b))/2;
    $mabc = ($mab+$c+abs($mab-$c))/2;

    echo "$mabc eh o maior\n";
?>
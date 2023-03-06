<?php
    $l1 = readline();

    $val1 = explode(' ', $l1);
    $a = intval ($val1[0]);
    $b = intval ($val1[1]);
    $c = intval ($val1[2]);

    $mab = ($a+$b+$a*$b($a-$b))/2;
    $mabc = ($mab+$c+$mab*$c($mab-$c))/2;

    echo "$mabc eh o maior\n";
?>
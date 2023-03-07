<?php
    $l1 = readline();

    $val = explode(" ",$l1);
    $a = intval($val[0]);
    $b = intval($val[1]);

    if($a % $b == 0 || $b % $a == 0){
        echo "Sao Multiplos\n";
    }else {
        echo "Nao sao Multiplos\n";
    }
?>
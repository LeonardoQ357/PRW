<?php
    $l1 = readline();

    $val = explode(" ", $l1);
    $hi = intval($val[0]);
    $mi = intval($val[1]);
    $hf = intval($val[2]);
    $mf = intval($val[3]);

    $h = $hf - $hi;
    $m = $mf - $mi;

    if($h < 0){
        $h = 24 + ($hf - $hi);
    }

    if($m < 0){
        $m = 60 + ($mf - $mi);

    }

    if($mf < $mi && $hf > $hi){
        $h = $h - 1;
    }else if($mf < $mi && $hf < $hi){
        $h = $h + 1;
    }

    if($hi == $hf && $mi == $mf){
        echo "O JOGO DUROU 24 HORA(S) E 0 MINUTO(S)\n";
    }else{
        echo "O JOGO DUROU $h HORA(S) E $m MINUTO(S)\n";
    }

?>
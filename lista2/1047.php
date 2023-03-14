<?php
    $l1 = readline();

    $val = explode(" ", $l1);
    $hi = intval($val[0]);
    $mi = intval($val[1]);
    $hf = intval($val[2]);
    $mf = intval($val[3]);



    if($hi == $hf && $mi == $mf){
        $h = 24;
        $m = 0;

    }else if($hi == $hf && $mi != $mf){
        if($mf < $mi){
            $mf += 60;

            $m = $mf - $mi;
        }else{
            $m = $mf - $mi;
        }

        $h = 0;
    }else if()

    echo "O JOGO DUROU $h HORA(S) E $m MINUTO(S)\n";

?>
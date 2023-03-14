<?php
    $l1 = readline();

    $val = explode(" ", $l1);
    $hi = intval($val[0]);
    $hf = intval($val[1]);



    if($hi == $hf && $hf == $hi ){
        echo "O JOGO DUROU 24 HORA(S)\n";
    }

    if($hf < $hi && $hf > 12){
        $hi = $hi + 24;

        $h = $hi -$hf;

        echo "O JOGO DUROU $h HORA(S)\n";
    }else if($hf < $hi && $hf <= 12){
        $hf = $hf + 24;

        $h = $hf - $hi;

        echo "O JOGO DUROU $h HORA(S)\n";
    }else if($hf > $hi){
        $h = $hf - $hi;

        echo "O JOGO DUROU $h HORA(S)\n";
    }

?>
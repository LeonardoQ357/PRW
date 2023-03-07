<?php
    $l1 = readline();

    $val1 = explode(" ", $l1);
    $a = doubleval($val1[0]);
    $b = doubleval($val1[1]);
    $c = doubleval($val1[2]);

    $delta = ($b*$b)-4*$a*$c;

    if($a != 0){
        if($delta < 0){
            echo "Impossivel calcular\n";
        }else {

            $x1 = (-$b + sqrt($delta))/(2*$a);
            $x1 = number_format($x1, 5, ".", "");

            $x2 = (-$b - sqrt($delta))/(2*$a);
            $x2 = number_format($x2, 5, ".", "");

            echo "R1 = $x1\nR2 = $x2\n";
        }
    }else{
        echo "Impossivel calcular\n";
    }
?>
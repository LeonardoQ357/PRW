<?php
    $l1 = readline();

    $val = explode(" ", $l1);
    $n1 = doubleval($val[0]);
    $n2 = doubleval($val[1]);
    $n3 = doubleval($val[2]);

    if($n1 < $n2){
        if($n1 < $n3){
            $c = $n1;

            if($n2 < $n3){
                $b = $n2;

                $a = $n3;
            } else{
                echo "$c\n";
                echo "$b\n";
            }
        }else{
            $c = $n3;
            echo "$a\n";
            echo "$b\n";
        } 

    }else if($n2 < $n3){
        echo "$b\n";
        if($n1 < $n3){
            echo "$a\n";
            echo "$c\n";
        }else{
            echo "$c\n";
            echo "$a\n";
        }
    }else if($n3 < $n1){
        echo "$c\n";
        echo "$b\n";
        echo "$a\n";
    }

    $qa = $a * $a;
    $qb = $b * $b;
    $qc = $c * $c;

    if($b+$c <= $a){
        echo "NAO FORMA TRIANGULO\n";
    }else{
        if($qb+$qc == $qa){
            echo "TRIANGULO RETANGULO\n";
        }

        if($qb+$qc < $qa){
            echo "TRIANGULO OBTUSANGULO\n";
        }

        if($qb+$qc > $qa){
            echo "TRIANGULO ACUTANGULO\n";
        }

        if($a == $b && $a == $c){
            echo "TRIANGULO EQUILATERO\n";
        }

        if(($a == $b && $a != $c) || ($b == $c && $b != $a) || ($c == $a && $c != $b)){
            echo "TRIANGULO ISOSCELES\n";
        }
    } 
?>
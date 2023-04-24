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
                $b = $n3;
                $a = $n2;
            }
        }else{

            $c = $n3;
            $a = $n2;
            $b = $n1;
        } 

    }else if($n2 < $n3){
        $c = $n2;
        if($n1 < $n3){
            $a = $n3;
            $b = $n1;
        }else{
            $b = $n3;
            $a = $n1;
        }
    }else if($n3 < $n1){
        $a = $n2;
        $b = $n1;
        $c = $n3;
    }else if($n1 == $n2 && $n3 > $n1){
        $a = $n3;
        $b = $n2;
        $c = $n3;
    }else if($n1 == $n3 && $n2 > $n1){
        $a = $n2;
        $b = $n1;
        $c = $n3;
    }else if($n2 == $n3 && $n1 > $n2){
        $a = $n1;
        $b = $n2;
        $c = $n3;
    }else if($n1 == $n2 && $n3 < $n1){
        $a = $n1;
        $b = $n2;
        $c = $n3;
    }else if($n1 == $n3 && $n2 < $n1){
        $a = $n1;
        $b = $n2;
        $c = $n2;
    }else if($n2 == $n3 && $n1 < $n2){
        $a = $n3;
        $b = $n2;
        $c = $n1;
    }else if($n1 == $n2 && $n2 == $n3){
        $a = $n1;
        $b = $n2;
        $c = $n3;
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
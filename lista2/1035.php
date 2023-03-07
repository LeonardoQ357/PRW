<?php
    $l1 = readline();

    $val1 = explode(" ", $l1);
    $a = intval($val1[0]);
    $b = intval($val1[1]);
    $c = intval($val1[2]);
    $d = intval($val1[3]);

    $cd = $c+$d;
    $ab = $a+$b;
    $par = $a % 2;

    if($b > $c){    
        if($d > $a){
            if($cd > $ab){
                if($c > 0 && $d > 0){
                    if($par == 0 ){
                        echo "Valores aceitos\n";
                    }else{
                        echo "Valores nao aceitos\n";
                    }
                }else{
                    echo "Valores nao aceitos\n";
                }
            }else{
                echo "Valores nao aceitos\n";
            }
        }else{
            echo "Valores nao aceitos\n";
        }
    }else{
        echo "Valores nao aceitos\n";
    }
?>
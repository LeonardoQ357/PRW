<?php
    $l1 = readline();

    $val = explode(" ", $l1);
    $x = doubleval($val[0]);
    $y = doubleval($val[1]);

    if($x == 0 && $y == 0){
        echo "Origem\n";
    }else if($x == 0 && $y != 0){
        echo "Eixo Y\n";
    }else if($x != 0 && $y == 0){
        echo "Eixo X\n";
    }else if($x > 0 && $y > 0){
        echo "Q1\n";
    }else if($x < 0 && $y > 0){
        echo "Q2\n";
    }else if($x < 0 && $y < 0){
        echo "Q3\n";
    }else if($x > 0 && $y < 0){
        echo "Q4\n";
    }
?>
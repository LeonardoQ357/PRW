<?php
    $l1 = readline();

    $val = explode(" ", $l1);
    $a = intval($val[0]);
    $b = intval($val[1]);
    $c = intval($val[2]);

    if($a < $b){
        if($a < $c){
            echo "$a\n";

            if($b < $c){
                echo "$b\n";
                echo "$c\n";
            } else{
                echo "$c\n";
                echo "$b\n";
            }
        }else{
            echo "$c\n";
            echo "$a\n";
            echo "$b\n";
        } 

    }else if($b < $c){
        echo "$b\n";
        if($a < $c){
            echo "$a\n";
            echo "$c\n";
        }else{
            echo "$c\n";
            echo "$a\n";
        }
    }else if($c < $a){
        echo "$c\n";
        echo "$b\n";
        echo "$a\n";
    }

    echo "\n$a\n$b\n$c\n";
?>
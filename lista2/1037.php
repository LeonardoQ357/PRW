<?php
    $x = readline();

    if($x >=0 && $x <=25){
        echo "Intervalo [0,25]\n";
    }else if($x >25 && $x <=50){
        echo "Intervalo (25,50]\n";
    }else if($x >50 && $x <=75){
        echo "Intervalo (50,75]\n";
    }else if($x >75 && $x <=100){
        echo "Intervalo (75,100]\n";
    }else {
        echo "Fora de intervalo\n";
    }
?>
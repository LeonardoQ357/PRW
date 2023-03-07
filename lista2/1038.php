<?php
    $l1 = readline();

    $val1 = explode(" ", $l1);
    $cod = intval($val1[0]);
    $qtd = intval($val1[1]);

    if($cod == 1){
        $x = $qtd * 4;
        $x = number_format($x, 2,".", "");
    }else if($cod == 2){
        $x = $qtd * 4.50;
        $x = number_format($x, 2,".", "");
    }else if($cod == 3){
        $x = $qtd * 5;
        $x = number_format($x, 2,".", "");
    }else if($cod == 4){
        $x = $qtd * 2;
        $x = number_format($x, 2,".", "");  
    }else if($cod == 5){
        $x = $qtd * 1.50;
        $x = number_format($x, 2,".", "");
    }

    echo "Total: R$ $x\n";
?>
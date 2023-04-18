<?php
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $op = $_POST['op'];

    if($op == 1){
        $r = $n1 + $n2;

        echo "A soma é igual a: $r";
    }else if($op == 2){
        $r = $n1 - $n2;

        echo "A subtração é igual a: $r";
    }else if($op == 3){
        $r = $n1 / $n2;

        echo "A divisão é igual a: $r";
    }else if($op == 4){
        $r = $n1 * $n2;

        echo "A multiplicação é igual a: $r";
    }
?>
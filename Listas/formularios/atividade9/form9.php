<?php
    $n = $_POST['nome'];
    $h = $_POST['time'];

    if($h <= 12){
        echo "Bom dia!";
    }else if($h > 12 && $h <= 18){
        echo "Boa tarde!";
    }else if ($h > 18){
        echo "Boa noite!";
    }
?>
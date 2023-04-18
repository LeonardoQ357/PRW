<?php
    $q = readline();
    
    for($i=1;$i<=$q;$i++){
    $l = readline();

    $n = explode(' ',$l);

    $in = strlen($n[0]) - strlen($n[1]);

    if($n[1] == substr($n[0], $in, strlen($n[1]))){
        echo "encaixa\n";
    }else{
        echo "nao encaixa\n";
    }
    }
?>
<?php
    $n = $_POST['opcao'];

    for($i=0;$i<=10;$i++){
        $x = $n * $i;
        
        echo "$n x $i = $x<br>";
    }
?>
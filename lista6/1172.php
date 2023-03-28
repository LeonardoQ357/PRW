<?php
    for($i=0;$i <= 10;$i++){
    $x[$i] = readline();
    
    }

    for($i=0;$i <= 9;$i++){
        if($x[$i] <= 0 ){
            $x[$i] = 1;
        }

    echo "X[$i] = ". $x[$i]. "\n";
    }

?>
<?php
    $t = readline();

    $x = 0;

    for($i=0;$i <= 999;$i++){
        if($x >= $t){
            $x = 0;
        }

        echo "N[$i] = $x\n";
        $x++;
    }
?>
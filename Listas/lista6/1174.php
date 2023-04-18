<?php
    for($i=0;$i <= 99; $i++){
        $v[$i] = readline();
    }

    for($i=0;$i <= 99; $i++){
        if($v[$i] <= 10){
            echo "A[$i] = ".number_format($v[$i], 1, ".", "")."\n";
        }
    }
?>
<?php
    $j = 7;

    for($i=1;$i<10;$j--){
        echo "I=$i J=$j\n";

        if($j <= 5){
            $j = 8;
            $i += 2;
        }
    }
?>
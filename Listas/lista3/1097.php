<?php

    for($i=1;$i<10;$i += 2){
        $r = 1;
        $j = 7 + ($i - 1);

        while($r <= 3){

            echo "I=$i J=$j\n";
            $r++;
            $j--;
        }

    }
?>
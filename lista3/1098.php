<?php
    $a = 0;

    for($i=0;$i<=2;$i += 0.2){
        $r = 1;
        $j = 1 + ($a*0.2);

        while($r <= 3){

            echo "I=$i J=$j\n";
            $r++;
            $j++;
        }
        $a++;
    }
?>
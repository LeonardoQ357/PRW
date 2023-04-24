<?php
    $s = 0;

    $d = 1;

    for($i=1;$i<=39;$i+=2){
        $s += $i/$d;
        
        $d += $d; 
    }

    echo number_format($s, 2, ".", "") ."\n";
?>
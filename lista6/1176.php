<?php
    $t = readline();
    $f[0] = 0;
    $f[1] = 1;

    for($i=0; $i < $t;$i++){
    $c[$i] = readline();

        for($u=0;$u <= $c[$i];$u++){
            if($u>1){
                $f[$u] = $f[$u-1] + $f[$u-2];
            }
            
            if($u == $c[$i]){
                echo "Fib($u) = $f[$u]\n";
            }
        }
    }
?>
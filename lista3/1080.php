<?php
    $x = readline();

    $m = $x;

    $pm = 1;

    for($i=2;$i <= 100;$i++){
        $x = readline();

        if($x > $m){
            $m = $x;

            $pm = $i;
        }
    }

    echo "$m\n$pm\n";
?>
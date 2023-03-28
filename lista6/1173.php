<?php
    $v[0] = readline();

    echo "N[0] = ".$v[0]."\n";

    for($i=1;$i <= 10; $i++){
        $v[$i] = $v[$i-1] * 2;

        echo "N[$i] = ".$v[$i]."\n";
    }
?>
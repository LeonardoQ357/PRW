<?php
    $x = readline();

    $v[0] = $x;

    echo "N[0] = ".number_format($v[0], 4, ".", "")."\n";

    for($i=1;$i <= 99;$i++){
        $v[$i] = $v[$i-1]/2; 

        echo "N[$i] = ".number_format($v[$i], 4, ".", "")."\n";
    }

?>
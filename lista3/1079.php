<?php
    $n = readline();

    for($i=1;$i <= $n;$i++){
        $v = explode(' ', readline());

        $m = ($v[0]*2+$v[1]*3+$v[2]*5) / 10;

        echo number_format($m, 1, ".", ""). "\n";

    }
?>
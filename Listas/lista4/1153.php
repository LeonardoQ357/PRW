<?php
    $n = readline();

    $fn = $n;

    for($i=1;$i <= $n-1; $i++){
        $fn *= $n-$i;
    }

    echo "$fn\n";

?>
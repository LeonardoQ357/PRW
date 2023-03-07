<?php
    $n = readline();

    $h = $n / 3600;
    $n = $n % 3600;
    
    $m = $n / 60;
    $n = $n % 60;

    $h = floor ($h);
    $m = floor ($m);

    echo "$h:$m:$n\n"
?>
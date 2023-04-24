<?php
    $n = readline();

    $a = $n / 365;
    $n = $n % 365;

    $m = $n / 30;
    $n = $n % 30;

    $a = floor($a);
    $m = floor($m);

    echo "$a ano(s)\n$m mes(es)\n$n dia(s)\n"
?>
<?php
    $v = readline();
    $vc = $v;

    $n100 = $v / 100;
    $v = $v % 100;

    $n50 = $v / 50;
    $v = $v % 50;

    $n20 = $v / 20;
    $v = $v % 20;

    $n10 = $v / 10;
    $v = $v % 10;

    $n5 = $v / 5;
    $v = $v % 5;

    $n2 = $v / 2;
    $v = $v % 2;

    $n1 = $v / 1;
    $v = $v % 1;

    $n100 = floor($n100);
    $n50 = floor($n50);
    $n20 = floor($n20);
    $n10 = floor($n10);
    $n5 = floor($n5);
    $n2 = floor($n2);
    $n1 = floor($n1);

    echo "$vc\n$n100 nota(s) de R$ 100,00\n$n50 nota(s) de R$ 50,00\n$n20 nota(s) de R$ 20,00\n$n10 nota(s) de R$ 10,00\n$n5 nota(s) de R$ 5,00\n$n2 nota(s) de R$ 2,00\n$n1 nota(s) de R$ 1,00\n";

?>
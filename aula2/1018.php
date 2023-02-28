<?php
    $v = readline();
    $vc = $v;

    $n100 = $v / 100;
    $n100 = number_format($n100, 0, "");
    $v = $v % 100;
    $v = number_format($v, 0, "");

    $n50 = $v / 50;
    $n50 = number_format($n50, 0, "");
    $v = $v % 50;
    $v = number_format($v, 0, "");

    $n20 = $v / 20;
    $n20 = number_format($n20, 0, "");
    $v = $v % 20;
    $v = number_format($v, 0, "");

    $n10 = $v / 10;
    $n10 = number_format($n10, 0, "");
    $v = $v % 10;
    $v = number_format($v, 0, "");

    $n5 = $v / 5;
    $n5 = number_format($n5, 0, "");
    $v = $v % 5;
    $v = number_format($v, 0, "");

    $n2 = $v / 2;
    $n2 = number_format($n2, 0, "");
    $v = $v % 2;
    $v = number_format($v, 0, "");

    $n1 = $v / 1;
    $n1 = number_format($n1, 0, "");
    $v = $v % 1;
    $v = number_format($v, 0, "");

    echo "$vc\n$n100 nota(s) de R$ 100,00\n$n50 nota(s) de R$ 50,00\n$n20 nota(s) de R$ 20,00\n$n10 nota(s) de R$ 10,00\n$n5 nota(s) de R$ 5,00\n$n2 nota(s) de R$ 2,00\n$n1 nota(s) de R$ 1,00\n";

?>
<?php
    $cod1 = readline();
    $num1 = readline();
    $val1 = readline();
    $cod2 = readline();
    $num2 = readline();
    $val2 = readline();
    $valf = $num1 * $val1 + $num2 * $val2;
    $valf = number_format($valf, 2, ".", "");

    echo "VALOR A PAGAR: R$ $valf\n";
?>
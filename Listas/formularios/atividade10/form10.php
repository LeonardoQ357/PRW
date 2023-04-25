<?php
    $p = $_POST['p'];
    $m = $_POST['m'];
    $g = $_POST['g'];

    $fp = $p * 10;
    $fm = $m * 12;
    $fg = $g * 15;
    $va = $fp + $fm + $fg;

    $fp = number_format($fp, 2, ",", "");
    $fm = number_format($fm, 2, ",", "");
    $fg = number_format($fg, 2, ",", "");
    $va = number_format($va, 2, ",", "");

    echo "Valor arrecadado pelas camisetas pequenas: R$ $fp<br>";
    echo "Valor arrecadado pelas camisetas médias: R$ $fm<br>";
    echo "Valor arrecadado pelas camisetas grandes: R$ $fg<br>";
    echo "Valor total arrecadado: R$ $va<br>";
?>
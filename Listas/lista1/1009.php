<?php
    $nome = readline();
    $salf = readline();
    $totalv = readline();
    $salt = $salf + $totalv * 0.15;
    $salt = number_format($salt, 2, ".", "");

    echo "TOTAL = R$ $salt\n";
?>
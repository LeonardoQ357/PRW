<?php
    $f = readline();
    $h = readline();
    $s = readline();
    $sal = $h * $s;
    $sal = number_format($sal, 2, ".", "");

    echo "NUMBER = $f\nSALARY = U$ $sal\n";
?>
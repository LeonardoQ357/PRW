<?php
    $tg = readline();
    $v = readline();
    $cg = ($tg * $v) / 12;
    $cg = number_format($cg, 3, ".", "");
    
    echo "$cg\n";
?>
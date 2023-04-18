<?php
    $r = readline();
    $v = (4/3) * 3.14159 * ($r*$r*$r);
    $v = number_format($v, 3, ".", "");

    echo "VOLUME = $v\n";
?>
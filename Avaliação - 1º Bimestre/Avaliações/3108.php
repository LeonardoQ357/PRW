<?php
    $n = readline();

    for($i=0;$i<=$n-1;$i++){
        $l = explode(" ", readline());

        $il = array_reverse($l);

        $s = array('p', 'f', 't', 'r', 'j', 'x', 'P', 'F', 'T', 'R', 'J', 'X');

        $r = array('b', 'v', 'd', 'l', 'z', 's', 'B', 'V', 'D', 'L', 'Z', 'S');

        $il = str_replace($s, $r, $il);

        echo implode(" ", $il). "\n";
    }
?>
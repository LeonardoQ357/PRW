<?php
    $l1 = readline();

    $val = explode(" ", $l1);
    $a = doubleval($val[0]);
    $b = doubleval($val[1]);
    $c = doubleval($val[2]);

    if($a+$c > $b && $b+$c > $a && $a+$b > $c){
        $p = $a + $b + $c;
        $p = number_format($p, 1, ".", "");

        echo "Perimetro = $p\n";
    }else{
        $area = (($a+$b)*$c) / 2;
        $area = number_format($area, 1, ".", ""); 
    }
?>
<?php
    $n = readline();

    $r = 0;
    $s = 0;
    $c = 0;

    for($i=1;$i <= $n;$i++){
        $v = explode(" ", readline());

        if($v[1] == "R"){
            $r += $v[0];
        }else if($v[1] == "S"){
            $s += $v[0];
        }else if($v[1] == "C"){
            $c += $v[0];
        }
    }

    $t = $r + $s + $c;
    $pr = ($r / $t) * 100;
    $ps = ($s / $t) * 100;
    $pc = ($c / $t) * 100;

    echo "Total: $t cobaias\n";
    echo "Total de coelhos: $c\n";
    echo "Total de ratos: $r\n";
    echo "Total de sapos: $s\n";
    echo "Percentual de coelhos: ". number_format($pc, 2, ".", "") ." %\n";
    echo "Percentual de ratos: ". number_format($pr, 2, ".", "") ." %\n";
    echo "Percentual de sapos: ". number_format($ps, 2, ".", "") ." %\n";
?>
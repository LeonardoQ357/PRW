<?php
    $n = readline();

    $s = 0;
    $b = 0;
    $a = 0;
    $s1 = 0;
    $b1 = 0;
    $a1 = 0;

    for($i=1;$i <= $n; $i++){
        $j = readline();

        $l1 = readline();
        $l2 = readline();

        $v1 = explode(' ',$l1);
        $v2 = explode(' ',$l2);

        $s += $v1[0];
        $b += $v1[1];
        $a += $v1[2];

        $s1 += $v2[0];
        $b1 += $v2[1];
        $a1 += $v2[2];
    }

    $ps = ($s1 / $s) * 100;
    $pb = ($b1 / $b) * 100;
    $pa = ($a1 / $a) * 100;

    echo "Pontos de Saque: ". number_format($ps, 2, ".", ""). " %.\n";
    echo "Pontos de Bloqueio: ". number_format($pb, 2, ".", ""). " %.\n";
    echo "Pontos de Ataque: ". number_format($pa, 2, ".", ""). " %.\n";
?>
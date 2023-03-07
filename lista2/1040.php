<?php
    $l1 = readline();

    $val = explode(" ",$l1);
    $n1 = doubleval($val[0]);
    $n2 = doubleval($val[1]);
    $n3 = doubleval($val[2]);
    $n4 = doubleval($val[3]);

    $m = ($n1*2+$n2*3+$n3*4+$n4*1)/10;
    $m = floor(($m*100))/100;
    $m = number_format($m, 1, ".", "");

    echo "Media: $m\n";

    if($m >= 7){
        echo "Aluno aprovado.\n";
    }else if($m < 5){
        echo "Aluno reprovado.\n";
    }else if($m >= 5 && $m < 7){
        echo "Aluno em exame.\n";

        $e = readline();

        echo "Nota do exame: $e\n";

        $mr = ($m + $e) / 2;
        $mr = number_format($mr, 1, ".", "");

        if($mr >= 5 ){
            echo "Aluno aprovado.\nMedia final: $mr\n";
        }else if($mr < 5){
            echo "Aluno reprovado.\nMedia final: $mr\n";
        }
    }
?>
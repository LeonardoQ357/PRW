<?php
    $aluno = $_POST['aluno'];
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $freq = $_POST['freq'];

    $m = ($n1 + $n2) / 2;

    echo "Nome do aluno: $aluno<br>Nota 1: $n1<br>Nota 2: $n2<br>Frequência: $freq<br>";

    if($m < 5){
        echo "<font color='#FF0000'>Reprova por nota.</font><br>";
    }else if($freq < 75){
        echo "Reprova por Frequência.<br>";        
    }else if($freq > 75 && $m > 5){
        echo "Aprovado.<br>";
    }
?>
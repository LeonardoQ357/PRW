<?php
    $alunos = array("Murilo", "Cássio", "Ricardo", "João");
    print_r($alunos);
    echo "<br>";

    //unset remove elemento de um determminada posição
    unset($alunos[1]);
    print_r($alunos);
    echo "<br>";

    //array_values reestabelece os indice
    $alunos = array_values($alunos);
    print_r($alunos);
    echo "<br>";
?>
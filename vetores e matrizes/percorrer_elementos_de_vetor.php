<?php
    // Exemplo para percorrer elementos de um vetor
    $alunos = array("Murilo", "Cássio", "Ricardo");

    echo "Quantidade de elementos : ". count($alunos). "<br>"; 

    for($x=0; $x < count($alunos); $x++){
        echo $alunos[$x]."<br>";
    }
?>
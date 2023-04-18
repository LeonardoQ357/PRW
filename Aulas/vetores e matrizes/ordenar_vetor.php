<?php
    // Exemplo para percorrer elementos de um vetor
    $alunos = array("Murilo", "Cássio", "Ricardo");
    print_r($alunos); // Imprime todos elementos do vetor
    echo "<br>";
    echo "Quantidade de elementos : ". count($alunos). "<br>"; 
    echo "<hr>";

    sort($alunos); //ordena o vetor em ordem crescente
    rsort($alunos); //ordena o vetor em ordem decrescente


    for($x=0; $x < count($alunos); $x++){
        echo "Aluno na posição $x: " .$alunos[$x]. "<br>";
        echo "quantidade de caracters: ".strlen($alunos[$x])."<br>";
        echo "<hr>";
    }

?>
<?php
    // Exemplo para percorrer elementos de um vetor
    $alunos = array("Murilo", "Cássio", "Ricardo");
    print_r($alunos); // Imprime todos elementos do vetor
    echo "<br>";
    echo "Quantidade de elementos : ". count($alunos). "<br>"; 
    echo "<hr>";

    for($x=0; $x < count($alunos); $x++){
        echo "Aluno na posição $x: " .$alunos[$x]. "<br>";
        echo "quantidade de caracters: ".strlen($alunos[$x])."<br>";
        echo "<hr>";
    }

    $indice = array_search("Murilo", $alunos);
    if($indice === false){
        echo "Elemento não encontrado.<br>";//Se o valor não existir ele retorna um boolean false
    }else{
        echo "Elemento entrado na posição $indice<br>";//Se o valor existir ele retorna a posição do elemento no vetor
    }
?>
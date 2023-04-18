<?php
    // $_GET obtém dado do formulário enviado via GET
    // $_POST obtém o dado do formulário enviado via POST
    $nome = $_POST['nome']; // nome entre '' deve ser igual ao name do input definido no formulário html
    $idade = $_POST['idade'];

    echo "<h1>$nome</h1>";
    echo "<h2>$idade</h2>";
    echo "<input value=$idade>";
    //echo "Nome: " . $_GET['nome'] . "\nIdade: " . $_GET['idade'] . "\n";
?>
 <!-- Código HTML -->
 <a href='form.html'><button>Voltar</button></a>
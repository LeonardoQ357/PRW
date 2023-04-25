<?php
    $pront = $_POST['pront'];
    $name = $_POST['name'];
    $idade = $_POST['idade'];
    $peri = $_POST['peri'];
    $mod = $_POST['mod'];

    if($pront == null){
        echo "O prontuário não pode estar em branco.<br><a href='form11.html'>Voltar</a>";
    }else if($name == null){
        echo "O nome não pode estar em branco.<br><a href='form11.html'>Voltar</a>";
    }else if($idade < 15 || $idade > 75){
        echo "A idade deve estar entre 15 e 75 anos.<br><a href='form11.html'>Voltar</a>";
    }else if($peri != "V" && $peri !="N"){
        echo "O período deve ser V ou N.<br><a href='form11.html'>Voltar</a>";
    }else if($mod < 1 || $mod > 4){
        echo "O módulo deve estar entre 1 e 4.<br><a href='form11.html'>Voltar</a>";
    }else{

        if($peri == "V"){
            echo "Prontuário: $pront<br>Nome: $name<br>Idade: $idade<br>Período: Vesperino<br>Módulo: $mod";
        }else if($peri == "N"){
            echo "Prontuário: $pront<br>Nome: $name<br>Idade: $idade<br>Período: Noturno<br>Módulo: $mod";
        }
    }
?>
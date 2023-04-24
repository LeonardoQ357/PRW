<?php
    $data = date('d/m/Y');
    $dia = substr($data,0,2);
    $mes = substr($data,3,2);
    $ano = substr($data,6,4);
    //substr($variavel,nº da posição do caractere, quantas letras vc quer pegar após o caracter);
 
    echo "Dia: ".$dia."<br>";
    echo "Mês: ".$mes."<br>";
    echo "Ano: ".$ano."<br>";
    //Implementar Mês e Ano
?>
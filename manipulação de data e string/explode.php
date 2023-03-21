<?php
    $data = date('d/m/Y');
    echo $data."<br>";
    $d = explode('/',$data);

    echo "Dia: ".$d[0]."<br>";
    echo "Mes: ".$d[1]."<br>";
    echo "Ano: ".$d[2]."<br>";

    //Utilizar explode para separar as palavra utilizando <ESPAÇO>
    $str = "IFSP Campus Birigui";
    $i = explode(' ',$str);
    
    echo $i[0]."<br>";
    echo $i[1]."<br>";
    echo $i[2]."<br>";
?>
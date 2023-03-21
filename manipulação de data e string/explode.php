<?php
    $data = date('d/m/Y');
    echo $data."<br>";
    $d = explode('/',$data);

    echo "Dia: ".$d[0]."<br>";
    echo "Mes: ".$d[1]."<br>";
    echo "Ano: ".$d[2]."<br>";
?>
<?php
    $vm = readline();
    $dv = readline();
    $cm = readline();

    $th = $dv/$vm;
    $tc = $dv/$cm;
    
    echo "Total horas: ". number_format($th, 2, ".", ""). "\n";
    echo "Total combustivel: ". number_format($tc, 2, ".", ""). "\n";
?>
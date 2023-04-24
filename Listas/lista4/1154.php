<?php
    $ti = 0;
    $si = 0;

    do{
        $i = readline();

        if($i>=0){
            $si += $i;

            $ti++;
        }
    }while($i >= 0);

    $mi = $si / $ti;

    echo number_format($mi, 2, ".", ""). "\n";
?>
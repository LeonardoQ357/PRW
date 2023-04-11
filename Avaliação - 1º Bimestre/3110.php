<?php
    $m = readline();

    for($x=0; $x<=4;$x++){

        for($y=0;$y<=4;$y++){
            $v[$x][$y] = readline();

            if($v[$x][$y] >= $m){
                echo "Valor Encontrado: " .number_format($v[$x][$y], 2, ".", ""). " Linha: " .$y. " Coluna: " .$x. "\n";
            }
        }

    }
?>
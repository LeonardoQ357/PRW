<?php
    $n = readline();

    for($i=1;$i<=$n;$i++){
        $x = readline();

        if($x == 0){
            echo "NULL\n";
        }else{
            if($x%2 == 0){
                if($x > 0){
                    echo "EVEN POSITIVE\n";
                }else{
                    echo "EVEN NEGATIVE\n";
                }
            }else{
                if($x > 0){
                    echo "ODD POSITIVE\n";
                }else{
                    echo "ODD NEGATIVE\n";
                }
            }
        }
    }
?>
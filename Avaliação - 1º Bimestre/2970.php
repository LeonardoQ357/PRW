<?php
    do{
        $k = readline();

        $p = explode(" ", readline());

        for($i=1;$i <= $k; $i++){
            $c = explode(" ", readline());

            if($c[0] == $p[0] || $c[1] == $p[1]){
                echo "divisa\n";
            }else if($c[0] > $p[0]){
                if($c[1] > $p[1]){
                    echo "NE\n";
                }else{
                    echo "SE\n";
                }
            }else if($c[0] < $p[0]){
                if($c[1] > $p[1]){
                    echo "NO\n";
                }else{
                    echo "SO\n";
                }
            }

        }
    }while($k != 0);
?>
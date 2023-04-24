<?php

    do{
        $x = readline();

        for($i=1;$i <= $x;$i++){
            if($i!=$x){
                echo "$i ";
            }else{
                echo "$i\n";
            }
        }
    }while($x != 0)
?>
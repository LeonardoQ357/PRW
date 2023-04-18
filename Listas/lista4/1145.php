<?php
    $l = explode(" ", readline());
    $c = 1;
    for($i=1;$i <= $l[1];$i++){
        if($c < $l[0]){
            echo "$i ";
        }else{
            echo "$i\n";
            $c = 0;
        }

        $c++;
    }


?>
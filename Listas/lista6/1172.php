<?php
    for($i=0;$i <= 9;$i++){
    fscanf(STDIN, "%d", $x[$i]);
 
    if($x[$i] <= 0 ){
        $x[$i] = 1;
    }

    echo "X[$i] = ". $x[$i]. "\n";
    
    }
?>
<?php
    $x = readline();
    $z = readline();

    while($x > $z){
        $z = readline();
    }
    
    $i = 1;

    for($c=0;$x <= $z;$c++){
        $r += $x+$c;
        $i ++;
    }

    echo "$i\n";
?>
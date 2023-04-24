<?php
    $x = readline();

    do{
        $z = readline();
    }while($x > $z);
    
    $r = $x;

    for($c=1;$r <= $z;$c++){
        $r += $x+$c;

    }

    echo "$c\n";
?>
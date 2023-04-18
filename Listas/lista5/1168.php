<?php
    $n = readline();
    
    while($n > 0){
    $linha = readline();

    $strlinha = (string)$linha;

    $leds = 0;  

    for($i=0;$i < strlen($linha); $i++){
        $niq = $strlinha[$i];

        settype($niq, "integer"); 

        if($niq == 0 || $niq == 6 || $niq == 9){
            $leds += 6;
        }

        if($niq == 1){
            $leds += 2;
        }

        if($niq == 2 || $niq == 3 || $niq == 5){
            $leds += 5;
        }

        if($niq == 4){
            $leds += 4;
        }

        if($niq == 7){
            $leds += 3;
        }

        if($niq == 8){
            $leds += 7;
        }
    }

    echo "$leds leds\n";

    $n--;
}

?>
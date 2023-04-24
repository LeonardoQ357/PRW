<?php
 for($i=1;$i<=6;$i++){
    $x = readline();

    if($x > 0){
        $m += $x;
        
        $p++;
    }
 }

 $m = $m/$p;

 echo "$p valores positivos\n".number_format($m,1,".","")."\n";
?>
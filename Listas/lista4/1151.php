<?php
    $x = readline();

    $v[0] = 0;
    $v[1] = 1;

    for($i=0;$i <= $x-1;$i++){
        
        if($i >= 2){
             
              if($i == $x-1){
                $v[$i] = $v[$i-1] + $v[$i-2];  
                  
                echo "$v[$i]\n";
            }else{
                $v[$i] = $v[$i-1] + $v[$i-2];
                
                echo "$v[$i] ";
            }
        }else if($i == 1){
            
            if($i == $x-1){
                echo "$v[1]\n";
            }else{
                echo "$v[1] ";
            }

        }else if($i == 0){
            if($i == $x-1){
                echo "$v[0]\n";
            }else{
                echo "$v[0] ";
            }
        }

    }
?>
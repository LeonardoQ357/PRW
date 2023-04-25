<?php
    $caminho = $_POST['caminho'];
    $qtdimg = $_POST['qtdimg'];

    for($i=1;$i <= $qtdimg; $i++){
        
        echo 
        "<div>
        <img src='../../../../$caminho/$i.jpg' width='150' height='100'>
        </div>";
    }
?>
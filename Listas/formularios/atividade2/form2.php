<?php
    $text = $_POST['text'];
    $textarea = $_POST['textarea'];
    $radio = $_POST['radio'];
    $select = $_POST['select'];

        echo 
    "<div>
        <h3>Text</h3> 
        $text
    </div>
    <div>
        <h3>Textarea</h3>
        $textarea
    </div>
    <div>
        <h3>CheckBox</h3>";
        
            if(isset($_POST['checkbox1'])){
                echo "CheckBox1: Marcada<br>";
            }else{
                echo "CheckBox1: Desmarcada<br>";
            }

            if(isset($_POST['checkbox2'])){
                echo "CheckBox2: Marcada";
            }else{
                echo "CheckBox2: Desmarcada";
            }

        echo
    "</div>
    <div>
        <h3>Radio</h3>
        Opção escolhida: $radio
    </div>
    <div>
        <h3>Select e Option</h3>
        Opção escolhida: $select
    </div>";

?>
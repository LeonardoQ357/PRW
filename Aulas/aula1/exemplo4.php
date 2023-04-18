<?php
    $a = false;
    $b = true;

    echo gettype($a)."<br>";
    echo gettype($b)."<br>";

    echo "<br>";

    var_dump ($a && $b);
    echo "<br>";
    var_dump ($a || $b);
?>
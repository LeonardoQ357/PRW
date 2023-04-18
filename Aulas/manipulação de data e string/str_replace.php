<?php
    $search  = array('A', 'B', 'C', 'D', 'E');
    $replace = array('B', 'C', 'D', 'E', 'F');
    $subject = 'A';
    echo str_replace($search, $replace, $subject);
?>
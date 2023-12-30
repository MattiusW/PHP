<?php

    $str = "Test string";
    $string = "";
    
    for($i = strlen($str); $i >= 0; $i--){
        $string .= $str[$i];
    }

    echo $string;

?>
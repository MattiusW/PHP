<?php

    $sentence = "Let's take LeetCode contest";
    $example = reverseWords($sentence);
    echo $example;

    function reverseWords($s) {
        $splited = explode(" ", $s);
        $reserved = "";
        echo "Test: {$splited[2]} \r\n";
        
        for($i = 0; $i < count($splited); $i++){
            $reserved .= strrev($splited[$i]) . " ";
            echo"Test2 : {$splited[$i]} \r\n";
        }

        return trim($reserved);
    }
?>
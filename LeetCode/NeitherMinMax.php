<?php

    $numbers = [2,4,25];
    $value = findNonMinOrMax($numbers);
    echo "Between value: ", $value;

    function findNonMinOrMax($nums) {
        $min = min($nums);
        $max = max($nums);
        echo "Minimum: {$min}, Max: {$max}\r\n";

        for($i = 0; $i < count($nums); $i++){
            if($nums[$i] > $min && $nums[$i] < $max){
                return $nums[$i];
            }
        }
        return -1;
    }
?>
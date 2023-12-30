<?php

    $numbers = [3,2,1,5,4];
    $target = 2;
    $var = countKDifference($numbers, $target);
    echo $var;

    function countKDifference($nums, $k){
        $count = 0;
        rsort($nums);
        
        for($j = 1; $j <= count($nums) - 1; $j++){
            for($i = 0; $i < $j; $i++){
                if($nums[$i] - $nums[$j] == $k){
                    $count++;
                }
            }
        }

        return $count;
    }

?>
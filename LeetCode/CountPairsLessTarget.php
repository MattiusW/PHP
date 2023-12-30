<?php

    $num = [-1,1,2,3,1];
    $number = -13;
    $view = countPairs($num, $number);

    echo $view;

    function countPairs($nums, $target){ 
        $total = 0;
        
        for($i = 1; $i <= count($nums) - 1; $i++){
            for($j = 0; $j < $i; $j++){
                if(0 <= $j && $j < $i && $i < count($nums) && $nums[$j] + $nums[$i] < $target){
                    $total++;  
                } 
            }
        }
    
        return $total;
     }
?>
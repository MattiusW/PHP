<?php

function runningSum($nums) {

    for ($i = 1; $i <= count($nums) - 1; $i++) {
        $nums[$i] = $nums[$i - 1] + $nums[$i]; 
    }

    return $nums;
}

$arr = runningSum([1,2,3,4]);

echo implode(" , " , $arr);

?>  
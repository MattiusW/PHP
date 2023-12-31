<?php

function subtractProductAndSum($n) {
    $split = str_split($n);
    $multy = 1;
    $add = 0;
    for($i = 0; $i < count($split); $i++) {
        $multy *= $split[$i];
        $add += $split[$i];
    }    
    
    return $multy - $add;
}

echo subtractProductAndSum(4421);
?>
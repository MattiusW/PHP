<?php

function smallestEvenMultiple($n) {
    if($n % 2 == 0) return $n;
    return $n * 2;
}

echo smallestEvenMultiple(5);

?>
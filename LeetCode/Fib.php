<?php

// meoization
// key will be arg fn, value will be return value

function fib($n, &$memo = array()){
    if(array_key_exists($n, $memo)) 
        return $memo[$n];
    if($n <= 1)
        return 1;
    $memo[$n] = fib($n - 1, $memo) + fib($n - 2, $memo);
    return $memo[$n];
}

echo fib(5) . "\n";
echo fib(7) . "\n";
echo fib(50) . "\n";
echo fib(70);

?> 
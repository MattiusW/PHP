<?php

function fib($n){
    if($n <= 2)
        return 1;
    return fib($n - 1) + fib($n - 2);
}

echo fib(5) . "\n";
echo fib(7) . "\n";
echo fib(3);

?> 
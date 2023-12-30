<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operatory arytmetycznex</title>
</head>
<body>
    <?php
        $a = 10;
        $b = 7;

        echo"a = {$a}, b = {$b}";
        echo"<br> a + b = " . ($a + $b);
        echo"<br>a - b = " . ($a - $b); 
        echo"<br>a * b = " . ($a * $b); 
        echo"<br>a / b = " . ($a / $b); 
        echo"<br>a % b = " . ($a % $b);
        echo"<br>ROUND = " . round($a / $b, 2);

        //Php know mathematics sequence 
        echo"<br><br>Mathematics sequance:<br>";
        echo"<br>2 + 5 * 3 + 10 / - 2 = ";
        echo 2 + 5 * 3 + 10 / 2 - 2;

        echo"<br><br> Pow and Sqrt:<br>";
        echo"<br> ** = pow(2, 4)" . pow(2, 4);
        echo"<br> sqrt = " . sqrt(64);

    ?>
</body>
</html>
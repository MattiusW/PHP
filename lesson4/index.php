<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson4</title>
</head>
<body>
    <?php

        $a = 5;
        $b = 10;
        $c = 5;

        echo "a = {$a}, b = {$b}<br>";
        echo "<br> {$a} == {$b} : " . ($a == $b);
        echo "<br> {$a} == {$c} : " . ($a == $c) . " <=> true";
        echo "<br> var_dump(a == b) : ";
        var_dump($a == $b);
        echo "<br> {$a} != {$b} : " . ($a != $b) . " <=> true";
        echo "<br> {$a} <> {$b} : " . ($a != $b) . " <=> true";
        echo "<br> {$a} != <> {$c} : ";
        var_dump($a != $c);
        echo " || ";
        var_dump($a <> $c);
        echo "<br> {$a} > {$b} : " . ($a > $b) . " <=> false || ";
        echo " : " . var_dump($a > $b);
        echo "<br> {$a} < {$b} : " . ($a < $b);
    
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable</title>
</head>
<body>
    <?php
        $number = 7.77;
        $num = 7;
        $false = false;
        $string_number = "776";

        // Declare constant
        define('CONSTANT', 7);
        echo"You'r number is : " . CONSTANT;
        echo "<br>";
        // View variable
        echo $number, " : " , $num,  "<br>";
        
        // View what variable have
        var_dump($false); 

        echo"<br>";
        echo"Convert string to number and add<br>";
        // PHP convert string to number if string is only number
        echo $string_number + 1;
        echo "<br>";
        //is integer?
        echo "Is Integer? : " , var_dump(is_int($string_number));
        echo "Is String? : " , var_dump(is_string($string_number));

        $example = 'number';
        $exampleTwo = 'num';
        echo "<br> {$$example}";
        echo "<br>" . $$exampleTwo;
    ?>
</body>
</html>
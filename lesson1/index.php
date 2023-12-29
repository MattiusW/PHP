<?php

    // String
    $name = "Mati";
    $games = "Games";
    
    // Integer
    $age = 21;
    $quantity = 3;
    $total = null;

    // Float
    $price = 129.99;
    
    // Boolean
    $online = true;
    $for_sale = false;
    
    $total = $quantity * $price;
    
    echo"Hello {$name}<br>";
    echo"Price is {$price}\$<br>";
    echo"Online status: {$online}<br>";
    echo"Is for sale?: {$for_sale}<br>";

    // Several variable
    echo"You buy {$quantity} {$games} and you will pay \${$total} for this.";
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP</title>
</head>
<body>
    <br>
    <button>Example</button>

</body>
</html>
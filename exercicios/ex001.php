<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

define("taxa",0.1);
 $valorproduto=100;
 $impostoproduto= taxa * $valorproduto;
 $valorfinal = $impostoproduto + $valorproduto;
 echo "a taxa é: " . $impostoproduto . "<br>";
 echo "o valor final é: " . $valorfinal . "<br>";



    ?>
</body>
</html>
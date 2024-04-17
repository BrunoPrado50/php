<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converssão de temperatura</title>
</head>
<body>
    <?php 
    //de celcius para fahrenhei
    
    function converter($C){
$F=((9* $C)/ 5)+32;
echo " a temperatura de celcius em fahrenhei é: $F\n";
return $F;
    }

    converter(3);
    // Nice
    ?>
</body>
</html>
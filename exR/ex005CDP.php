<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primos</title>
</head>
<body>
    <?php 
    $numero = 10;
    $contador = 2;
    for ($i=1; $i<= $numero; $i++){
       
        if ($numero % $i == 0){

            $contador = $contador + 1;

        }
    }
    if($contador == 2){
        echo "o numero $numero é primo.";
    }
    else{
        echo "o numero $numero não é primo.";
    }
    ?>
</body>
</html>
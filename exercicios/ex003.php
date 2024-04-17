<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>numeros parentes</title>
</head>
<body>
    
<?php
//$i=2; $i<=100 /vai dar erro linha 12 e 15 , e vai imprimir numeros primos ate 10007
for($num=2;$num<=100;$num++){
$e_primo=true;

    if($num>1){
        for($i=2;$i<=sqrt($num);$i++){
            //num*(1/2)
            if($num%$i==0){
                $e_primo=false;
                break;
            }
           
        }
        if ($e_primo){
echo $num . " é primo <br>";
        }
    }
}

?>
</body>
</html>
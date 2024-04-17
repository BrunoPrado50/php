<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php 
 $c = 18;
 if( $c >= 18){
     echo " a partir de 18 é obrigratorio.";
     }
 if ( $c < 16){
     echo " menor de 16  não pode votar.";
     }
 
 if($c < 16 && $c >1)
 echo " vc pode mais nao e obrigatorio.";
 ?>   
</body>
</html>
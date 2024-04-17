<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  $numero = 5;
  echo "O somatório de $numero é : ".somatorio($numero);
  
  function somatorio($numero){
   if($numero==1)
    return 1;
   else
    return $numero + somatorio($numero-1);
  }
  // peguei da net , alterar o get da linha 10
 ?>


</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>
    <?php 
    $numeroP = 0;
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $numeroP = $_POST["numero"];
        echo"<h2>Dados Enviados</h2>";
    
    
    if($numeroP > 0){
        echo"<p>Você digitou um numero positivo: $numeroP</p>";
    }
    else if($numeroP < 0){
        echo"Você digitou um numero negativo: $numeroP </p>";
    }

    if($numeroP == 0 ){
        echo"<p>Você digitou zero: $numeroP</p>";
    }
    }
    ?>
         
    <h2>Formulario</h2>
    <form method="post">
        <label for="numero">numero:</label><br>
        <input type="number" name= "numero" id="numero" value="<?php echo $numeroP; ?>"><br>
        <button type="submit">Enviar</button>

    
</form>
</body>
</html>
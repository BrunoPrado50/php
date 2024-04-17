<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 4</title>
</head>
<body>
    <?php 
    $idade = 0;
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $idade = $_POST["idade"];
        echo"<h2>Dados Enviados</h2>";

        if($idade >= 16){
            echo"<p>Você ja pode votar mas não é obrigatorio votar. $idade</p>";
        }
        else if($idade < 16 ){
            echo"Você não pode votar. $idade <p/>";
        }

        else if ($idade >=18 ){
        echo"<p> Você é obrigado a votar. $idade </p>";   
    }
}
    ?>
    <h2>Formulario</h2>
    <form method="post">
        <label for="idade">Digite sua idade:</label><br>
        <input type="idade" name= "idade" id="idade" value="<?php echo $idade; ?>"><br>
        <button type="submit">Enviar</button>
</body>
</html>
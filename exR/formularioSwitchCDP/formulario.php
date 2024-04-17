<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $numero = 0;
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $numero = $_POST["numero"];
        echo "<h2>Dado Enviado</h2>";
        echo "<p>Número: $numero</p>";

        echo "<h2>Análise do Número</h2>";
        if($numero == 0){
            echo "Número é igual zero.";
        }
        if($numero > 0){
            echo "Número é maior que zero.";
        }
        if($numero < 0){
            echo "Número é menor que zero.";
        }
    }
    ?>
    <h2>Formulário</h2>
        <form method="post">
            <label for="numero">Número: </label><br>
            <input type="number" name="numero" id="numero" value="<?php echo $numero; ?>"><br>
            <button type="submit">Enviar</button>
        </form>
</body>
</html>
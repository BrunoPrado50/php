<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        //inicializar variaveis
                $nome = "";
                $sobrenome = "";
    
        //verificar se o formulario foi enviado
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                //Obter os valores dos campos dos formularios
                $nome = $_POST['nome'];
                $sobrenome = $_POST['sobrenome'];

                //Exibir os valores enviados pelo formulario
                echo "<h2>Dados Enviados </h2>";
                echo "<p>Nome: $nome</p>";
                echo "<p>Sobrenome: $sobrenome</p>";
                } 
    
    ?>
    <h2> formulario</h2>

    <form method="post">
        <label for="nome"></label><br>
        <input type="text" name="nome" id="nome" value="<?php echo $nome;?>"><br>

        <label for="sobrenome"></label><br>
        <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $sobrenome;?>"><br>
<button type="submit">enviar</button>

            </form>

</body>
</html>
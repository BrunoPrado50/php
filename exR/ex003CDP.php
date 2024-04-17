<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>
    <?php 
     if($_SERVER["REQUEST_METHOD"]=="POST"){
        $numero = $_POST["numero"];
        echo"<h2>Dados Enviados</h2>";

     }
    switch($numero){
        case 1:
            $dia_da_semana = "Domingo";
            break;

            case 2 :
                $dia_da_semana ="Segunda";
                break;

                case 3:
                $dia_da_semana = "Terça";
                break;

                case 4:
                $dia_da_semana = "Quarta";
                break;

                case 5:
                $dia_da_semana = "Quinta";
                break;

                case 6:
                $dia_da_semana = "Sexta";
                break;

                case 7:
                    $dia_da_semana = "Sábado";
                    break;
            
        default:
        $dia_da_semana = "Número invalido";
        break;
                }
        echo"<h2>Dias da semana</h2>";
        echo"<p>Dia correspondente: $numero é: $dia_da_semana";
    
    ?>
    <h2>Formulario</h2>
    <form method="post">
        <label for="numero">Digite um numero de 1 a 7:</label><br>
        <input type="number" name= "numero" id="numero" min="1" max="7" required><br>
        <button type="submit">Enviar</button>
</body>
</html>
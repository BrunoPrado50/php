<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body><h1>
    <?php
$numerosoperacoes1;
$numerosoperacoes2;
$resultadosoma;
$resultadosubtracao;
$resultadomultiplicacao;
$resultadodivisao;

echo " digite o primeiro numero a ser somado, subtraido, multiplicado ou dividido: //2" . "<br>";
$numerosoperacoes1=2;
echo " digite o segundo numero a ser somado , subtraido , multiplicado ou dividido: //3" . "<br>";
$numerosoperacoes2=3;

$resultadosoma = $numerosoperacoes1+$numerosoperacoes2;
$resultadosubtracao= $numerosoperacoes1 - $numerosoperacoes2;
$resultadomultiplicacao=$numerosoperacoes1*$numerosoperacoes2;
$resultadodivisao= $numerosoperacoes1 / $numerosoperacoes2;

echo " a soma foi: " . $resultadosoma. "<br>";
echo " a subtração foi: " . $resultadosubtracao . "<br>";
echo " a multiplicação foi: " . $resultadomultiplicacao . "<br>";
echo " a divisão foi: " . $resultadodivisao . "<br>";


    ?>
    </h1>
</body>
</html>
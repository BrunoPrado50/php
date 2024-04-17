<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pessoa</title>
</head>
<body>  
<?php 

class Pessoa{
    public $nome;
    public $idade;
    public $profissao;

    public function __construct($nome,$idade,$profissao)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->profissao = $profissao;
    }

    public function informar(){
        return " O funcionario {$this->nome}<br> de idade: {$this->idade}<br> trabalha na profissõa: {$this->profissao}<br>";

    }
    public function organizar(){
        if($this->idade < 18){
            echo " é menor de idade";
        }
        else {
            echo "é maior de idade";
        }
    }

}

$agente1 = new Pessoa("Bruno",7,"auxiliar");

echo $agente1->informar();

echo $agente1->organizar();

?>
</body>
</html>
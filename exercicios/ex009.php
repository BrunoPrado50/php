<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
</head>
<body>
    <?php 
    
class Produto{
    public $nome;
    public $preco;
    public $quantidade;
    public $valortotal;

    public function __construct($nome,$preco,$quantidade)
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
        
    }

    public function calcular(){

        $this->valortotal = $this->preco * $this->quantidade;
       

        return " o nome do produtor é: {$this->nome} <br> o preço é : RS{$this->preco} <br> a quantidade é : {$this->quantidade} <br> e o valor total do estoque é : {$this->valortotal}";


    }
}
$produto1 = new Produto("pera",10,9);

echo $produto1->calcular();
    
    
    ?>
</body>
</html>
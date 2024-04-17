<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangulo</title>
</head>
<body>
    <?php 
    class Triangulo{
        public $base;
        public $altura;
        public $lado1;
        public $lado2;
        public $lado3;
        public $area;
        public $perimetro;

        public function __construct($base,$altura,$lado1,$lado2,$lado3)
        {
            $this->base=$base;
            $this->altura=$altura;
            $this->lado1=$lado1;
            $this->lado2=$lado2;
            $this->lado3=$lado3;

        }
        
        public function calcularArea(){
$this->area= ($this->base * $this->altura)/2;

return " a area do triangulo é {$this->area}<br>";
        }

        public function calcularPerimetro(){
$this->perimetro= $this->lado1 + $this->lado2 + $this->lado3;
return " o perimetro do tringulo é {$this->perimetro}<br>";
        }
    }
    
    $triangulo1 = new Triangulo(6,5,7,7,8);
    echo $triangulo1->calcularArea();
    echo $triangulo1->calcularPerimetro();
    ?>
</body>
</html>
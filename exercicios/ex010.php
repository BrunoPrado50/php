<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quadrado</title>
</head>
<body>
    <?php 
    
    class Quadrado{
        public $lado;
        public $area;
        public $perimetro;

        public function __construct($lado)
        {
            $this->lado = $lado;

        }
        public function calcularArea(){

$this->area = $this->lado * $this->lado;

return " a area do quadrado é {$this->area}<br>";
        }
        public function calcularPerimetro(){

$this->perimetro= $this->lado *4;

            return " o perimetro do quadrado é {$this->perimetro}<br>";
        }

    }
    $lado1 = new Quadrado(5);
    echo $lado1->calcularArea();
    echo $lado1->calcularPerimetro();
    
    ?>
</body>
</html>
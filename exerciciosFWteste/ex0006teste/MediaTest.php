<?php 

require 'Media.php';
use PHPUnit\Framework\TestCase;

class MediaTest extends TestCase{

    public function testeCalcular(){
    $media1 = new Media();
    $resultado=$media1->calcular(3,2,5,10);
    $this->assertEquals(5 ,$resultado);
}

}

?>
<?php

require 'Fatorial.php';
use PHPUnit\Framework\TestCase;
 class FatorialTest extends TestCase{

    public function testeFatorar(){

        $fatorial1 = new Fatorial();
        $resultado = $fatorial1->fatoriar(5);
        $this->assertEquals(120,$resultado);
    }
 }

?>
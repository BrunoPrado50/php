<?php 

class Fatorial{

    public function fatoriar($n){
        //return $n > 1 ? $n * fatoriar($n - 1) : 1;
        $result = 1;
        for ($i = 1; $i<=$n;$i++)
        $result*=$i;
    return$result;
        
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de numeros primos</title>
</head>
<body>
    <?php
 
function verificar($num){


    if($num > 1 && $num ==2 || $num > 2 &&
    $num %2 !=0 && $num % $num == 0 && $num % 1 ==0){
        return true;
    } else{
        return false;
    }
}
$numero=111;
if (verificar()){
echo "é primo";
}

//terminar


//if ($num <=1){
    //return false;
//}
 //if ($num % $num==0 && $num % 1==0){
    //return true;
 //} else{
    //return false;
 //}


    //if ($num>1){
        //for($i=2;$i<=sqrt($num);$i++) {
            //if($num%1==0){
                //break;
            //}}}
            //if($num%1==0&&$num%$num==0){
                //echo "é primo";
            //}
    //}

//}
//$numero=4;
//if ( verificar($numero)){
   // echo "o numero $numero é primo";
//}
//else{
    //echo " o numero $numero não é primo";

//corrigir :(
    ?>
</body>
</html>
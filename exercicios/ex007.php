 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
<?php 

function validar($senha){

if (strlen($senha) < 8){
}
if(!preg_match('/[A-Z]/',$senha) || !preg_match('/[a-z]/',$senha)){

}
if(!preg_match('/\d/',$senha)){

}
if(!preg_match('/[a-zA-z0-9]/',$senha)){
    
}



}

?>
 </body>
 </html>
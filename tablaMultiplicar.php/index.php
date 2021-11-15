<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

if(isset($_GET['numero'])){
    $numero = (int)$_GET['numero'];
}else{
    $numero = 1;
}
echo "<h1>Tabla de multiplicar del numero $numero</h1>";
$contador = 0;
while($contador <= 10){
    echo "$numero x $contador = " .($numero * $contador). "</br>";
    $contador++;
}

?>


</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
<?php    
/*
Crea dos variables cuyo nombre sea "uno" y "dos"
he imprimelas por pantalla. Pon un comentario 
con el tipo de dato que contienen
*/

// String
$uno = "Contenido de la variable 1";

// Integer

$dos = 245;

echo "UNO: " . $uno. "<br>";
echo "DOS: " . $dos. "<Hr>";

/*
Calcula los cuadrados de los 30 primeros numeros naturales
*/
for($i = 1; $i <= 30; $i++){
    echo "El numero de " . $i . " es ". ($i*$i) . "<br>";

    
}
echo "<hr>";
/*
Modifica el ejercicio anterior para que muestre 
al lado de cada cuadrado si es par o impar */

for($i = 1; $i <= 30; $i++){

    $cuadrado = $i*$i;

    echo "El cuadrado de " . $i . " es " . $cuadrado;    

    if($cuadrado % 2 == 0){

        echo " y es par";
    }else{
        echo " y es impar";
    }
    echo "<br>";
}
echo "<hr>";

?>


</body>
</html>
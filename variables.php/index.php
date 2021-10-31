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
    #  echo"<br><br>"; para hacer dos saltos de linea.
    # <br>";   Al final de la linea, detras de las comillas y el ;
    #Variable entero
    $numero = 5;
    echo $numero;
    echo "Esto es una variable int y no tiene que ir entre comillas: $numero";
    echo "<br><br> ";
    #Así separa párrafos
    #Variable texto
    $palabra = "palabra";
    echo "Esto es una variable string: $palabra";
    echo"<br><br>";

    # Lammadas  
    # Si la variable la ponemos fuera de las comillas 
    # deben de estar sep'aradas por un punto.

    $nombre = "Juan";
    $edad = 15;
    echo "El nombre es " . $nombre . " y tiene" . $edad . " años. <br>";

    #Variable Booleana true es 1,  false

    $boleana = true;
    echo "Esto es una variable booleana: $boleana";
    echo"<br><br>";

    #Variable Array
    #Tras la variable en echo hay que poner [] y un numero se empieza en 0
    $colores = array("rojo","amarillo");
    echo "Esto es una variable array: $colores[0]";
    echo"<br><br>";

    # Variable array  arreglo.
    # Se hace con idices
    # Especificar un nombre a cada índice
    # Se separan con una coma. Y la llamada entre corchetes pero no 
    # con numero de su posición sino como se llama
    $verduras = array("verduras1"=>"lechuga", "verduras2"=>"cebolla");
    echo "Esto es una variable arreglo con propiedades: $verduras[verduras1] <br>";
   
-
    #Variable arreglo con propiedades. Una varible con indice.
    #Palabra clave es (object)
    # Esta vez en la llamada no se pone =>  sino ->
   

    $frutas = (object)["fruta1"=>"pera","fruta2"=>"manzana"];
    echo "Esto es una variable objeto: $frutas->fruta1 <br>"; 

    ?>
</body>
</html>
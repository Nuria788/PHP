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
$servername = "localhost"; // direccion del servidor
$username = "wp_miblog_nuria"; // nombre usuario
$password = "4bgpe3";
$dbname = "wp_bd"; // nombre de la base de datos

// Create connection  creamos la conexion.
// direccion de la base de datos que esta en la variable $servername y asi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  echo("Connection failed: " . mysqli_connect_error());
}else{
echo "Connected successfully";
}

$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$email=$_POST['email'];

// sql to create table
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('$nombre','$apellidos','$email')";

    if (mysqli_query($conn, $sql)) {
      echo "Datos introducidos correctamente";
    } else {
      echo "Error no se han podido introducir los datos " . mysqli_error($conn);
    }
    
    mysqli_close($conn);

    // $consulta = "SELECT * FROM DATOSPERSONALES;
    // $resyltados = mysqli_query($conexion, $consulta;
    // $fila = mysqli_fetch_row($resultados);
    // echo  $fila[0] . " ";       . " ";  asi hago espacios
    // echo  $fila[1] . " ";
    // echo  $fila[2] . " ";
    ?>
</body>
</html>


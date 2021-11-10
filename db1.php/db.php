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
        $servername = "localhost"; # $db_host="localhost" direccion;
        $username = "pruebasPHPuser"; # $db_usuario;
        $password = "user";  # $ db_contrasena;
        $dbname = "pruebasPHPdb";   # $db_nombre;
        
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        // Check connection
        if (!$conn) {
            echo"Connection failed: " . mysqli_connect_error();
        }else{
            echo "Connected successfully";
        }


        

        // Solucion1
        $sql = "INSERT INTO MyGuests (firstname, lastname, email)
        VALUES ('".$_POST['nombre']."', '".$_POST['apellidos']."', '".$_POST['email']."')";
        

        //Solucion2, diferente forma
        /*
        $nombre=$_POST['nombre']
        $apellidos=$_POST['apellidos']
        $email=$_POST['email']
        

        // sql to create table
        $sql = "INSERT INTO MyGuests (firstname, lastname, email)
        VALUES ('$nombre', '$apellidos', '$email')";

        */

        if (mysqli_query($conn, $sql)) {
        echo "Datos introducidos correctamente";
        } else {
        echo "Error no se han podido introducir los datos: " . mysqli_error($conn);
        }

        mysqli_close($conn);




    ?>
    
</body>
</html>
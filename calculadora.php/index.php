<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name = "calc" action = "calc.php" method="post">

<p> A <input type="text" name = "a" size = "10" value ="<? echo $y; ?>">;</p>
<p> B <input type="text" name = "b" size = "10" value ="<? echo $z; ?>">;</p>
<br>

<input type="submit" value ="Suma" name = "btsuma">;
<input type="submit" value ="Resta" name = "btresta">;
<input type="submit" value ="Multiplicacion" name = "btmlt">;
<input type="submit" value ="Division" name = "btdiv">;

</form>
<form action="procesar.php" method="post">
<p>Nombre:  <input type="text" name="nombre"/> </p>
<p>Asunto:  <input type="text" name="asunto"/> </p>
<p>Mensaje:  <input type="text" name="mensaje"/> </p>

</body>
</html>
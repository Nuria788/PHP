<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Completo</title>
</head>
<body>
    <?php

    $y = $_POST['a'];
    $z = $_POST['b'];

    if (isset($_POST['btsuma'])){
        $c = $y + $z;
        echo "$y + $z es " . $c;
    }
    if (isset($_POST['btresta'])){
        $c = $y + $z;
        echo "$y - $z es " . $c;
    }
    if (isset($_POST['btmlt'])){
        $c = $y * $z;
        echo "$y * $z es " . $c;
    }
    if (isset($_POST['btdiv'])){
        
        if ($z != 0) $c = $y / $z;
            else $c = 0;
            echo "$y / $z es " . $c;
    }
    ?>

   
</body>
</html>
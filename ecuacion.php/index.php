<html> 

<head> 
<title>Resolucion de una ecuacion de segundo grado.</title> 
</head> 

<body> 

   

<?php  
$A=1; // $A = $_POST["A"]
$B=5;
$C=4;

$resta = $B**2 - 4 * $A *$C;

if ($resta<0){

    echo "<p> no tiene solución >/p>";

}else {
    $raiz = $resta ** 0.5; // sqrt($resta)

    $numerador1 = -$B + $raiz;
    $numerador2 = -$B - $raiz;

    $x1 = $numerador1 / 2 $A; // $numerador1 / (2 +$A);
    $x2 = $numerador1 / 2 $A;

    echo "<p> la solucion x1 = $x1 </p>";
    echo "<p> la solucion x2 = $x2 </p>";
}
?>
 </form> 

</body> 

</html> 
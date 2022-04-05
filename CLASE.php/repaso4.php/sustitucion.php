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

    /* Sustituir en el siguiente texto *raton* y *gato* por las variables nombre recogidas del formulario.
*/
$nombre = $_POST["nombre"];
$nombre1 = $_POST["nombre1"];
$texto = $_POST["texto"];
//

$texto = 
"
<p> Ratón: ¡Espera!, ¡Espera!</p>
<p> Gato: ¿Qué quieres?</p>
<p> Ratón: ¿Por qué haces esto?</p>
<p> Gato: ¿Qué cosa?</p>
<p> Ratón: Cazarme.</p>
<p> Gato: Pues, porque tengo hambre.</p>
<p> Ratón: Bueno, ¿Te gusta mi sabor y la textura de mi piel?</p>
<p> Gato: Humm, de hecho no, odio cuando la cola pasa por mi </p>
<p> garganta y todavía después de unas semanas sigo escupiendo </p>
<p> bolas de pelo blancas.</p>
<p> Ratón: Entonces ¿Por qué cazas ratones? No tiene sentido.</p>
<p> Gato: Tal vez, pero en la iglesia de Doraemon el gato que</p>
<p> vino del futuro, nos enseñaron que para estar cerca de él</p>
<p> debemos comer ratones pues ustedes no lo aceptan a él como el</p>

<p> único viajero del tiempo y salvador de la comunidad gatuna.</p>
<p> Ratón: No puedo creer que esa sea la razón.</p>

<p> Gato: Hagamos un trato, te dejare libre si aceptas a</p>

<p> Doraemon como único viajero del tiempo y salvador de la</p>

<p> comunidad gatuna.</p>

<p> Ratón: Claro que no lo aceptaré, para empezar por que no</p>

<p> existe y segundo, si lo hiciera, entonces no me convendría</p>

<p> creer en él ya que solo quiere salvar a los felinos.</p>

<p> Gato: No te atrevas a decir que no existe, rata blasfema,</p>

<p> porque está en todos lados y puede desatar su furia, además en</p>

<p> mi iglesia tenemos una comunidad de ratones creyentes a los</p>

<p> cales dejamos en paz.</p>

<p> Ratón: Doraemon sólo era la caricatura de un gato azul,</p>
</p
<p> ¿Cuántos gatos azules conoces?</p>

<p> Gato: Yo creo que para demostrar su divinidad Doraemon</p>
<p> eligió el color azul para que ninguna raza sea discriminada y</p>
<p> la televisión fue la manera de extender su mensaje en</p>
<p> nosotros.</p>
<p> Ratón: Bueno, explícame esto, Doraemon era un robot, ¿Por</p>
<p> qué tendría que comer ratones si ni estomago tiene? Yo creo</p>
<p> que tu iglesia ha inventado todo sólo para poder controlarlos.</p>
<p> Gato: Pues, pues… (El Gato se come al ratón) Tanta plática</p>
<p> me abrió el apetito. </p>";

 

$cambio = "Ratón";
 
$cambio1 = "Gato";

 
$textoACambiar =  str_ireplace($cambio, $nombre, $texto);
  
$textoACambiar =  str_ireplace($cambio1, $nombre1, $textoACambiar);

echo  $textoACambiar ;

echo "<br><br>";



 


    ?>
</body>
</html>
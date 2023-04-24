<!DOCTYPE html>
<html lang="en">
<?php

$heure = date("H");

if($heure <= 12){
    echo "bonjour";

}else if( $heure >=24){
    echo "bonsoir";
}

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
echo "bonjour";
    ?>
</body>
</html>


// Exercice:
// Afficher une page qui  en titre de l'onglet et en titre de la page (balise title et h1) affiche
// bonjour si on est le matin
// bonsoir si on est l'après midi

//  pour savoir l'heure qu'il est, on peut utiliser date ("H")


<h1>  </h1>
<?php

/* page principale pour l'exercice 1:


// Exercice:
// Afficher une page qui  en titre de l'onglet et en titre de la page (balise title et h1) affiche
// bonjour si on est le matin
// bonsoir si on est l'après midi

//  pour savoir l'heure qu'il est, on peut utiliser date ("H")

*/

// Définir le message à afficher : le mettre dans $message
// récupérer l'heure
$heure = date("H");
// Si on est le matin : cad si l'heure est <= 11 (ou < 12):
// le message est bonjour
// sinon c'est bonsoir
if($heure <12){
    $message = "bonjour";
}else{
    $message = "bonsoir";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $message ?></title>
</head>
<body>
    <h1><?=  $message ?></h1>
</body>
</html>
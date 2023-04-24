<?php
// programme appelé par le navigateur

// rôle: calculer une opération sur 2 nombres et affiche le résultat
// paramètres
//  POST nombre1 : 1er nombre
//  POST nombre2 : le second nombre
//  POST :l'opération à faire (add,sou,mul,div)


// récupérer les saisis
$nombre1 = $_POST["nombre1"];
$nombre2 = $_POST["nombre2"];
$operation = $_POST["operation"];




// faire le calcul stocker le resultat dans $resulat
// si l'operation est add
// le resultat est nombre1 + nombre2
if($operation == "add"){
    $resultat = $nombre1 + $nombre2;

}else if($operation == "sou"){
    $resultat = $nombre1 - $nombre2;

}else if($operation == "mul"){
    $resultat = $nombre1 * $nombre2;

}else if($operation == "div"){
    $resultat = $nombre1 / $nombre2;

}




// Afficher le résulat

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>le résultat est <?= $resultat ?></p>
    
</body>
</html>
<?php
/*
A partir du tableau des articles, afficher un bloc pour chaque article ayant du stock,
avec la référence, la désignation, le prix

*/
// initialisations
ini_set('display_errors', 1);
error_reporting(E_ALL);

$articles = [
	"A413" => [
		"designation" => "Ecran 22 pouces générique",
		"type" => "ecran",
		"prix" => 140,
		"pa" => 105,
		"coloris" => [ "gris", "noir" ],
		"stock" => 12,
		],
	"A422" => [
		"designation" => "Ecran 22 pouces luxe",
		"type" => "ecran",
		"prix" => 190,
		"pa" => 135,
		"coloris" => [ "gris", "noir", "blanc" ],
		"stock" => -2,
		],
	"A458" => [
		"designation" => "Ecran 26 pouces générique",
		"type" => "ecran",
		"prix" => 260,
		"pa" => 190,
		"coloris" => [ "gris" ],
		"stock" => 0,
		],
	"A501" => [
		"designation" => "PC bureautique sans écran",
		"type" => "UC",
		"prix" => 380,
		"pa" => 280,
		"coloris" => [ "noir", "blanc" ],
		"stock" => 5,
		],
	"A502" => [
		"designation" => "PC puissant sans écran",
		"type" => "UC",
		"prix" => 520,
		"pa" => 390,
		"coloris" => [ "noir", "blanc" ],
		"stock" => 5,
		],
	"B2" => [
		"designation" => "Souris optique confort",
		"type" => "accessoire",
		"prix" => 15,
		"pa" => 6,
		"coloris" => [ "noir", "blanc", "gris" ],
		"stock" => 25,
		],
	"B18" => [
		"designation" => "Clavier",
		"type" => "accessoire",
		"prix" => 15,
		"pa" => 7,
		"coloris" => [ "noir", "gris" ],
		"stock" => 15,
		],	

]; 

// afficher pour chaque articles ayant un stock supérieur à 0 sa ref sa designation et son prix

foreach($articles as $ref => $descrProd){

// si stock est supérieur ou égale à 1 affiche l'article (sa référence sa désignation et son prix.)   
}if($descrProd["stock"] >=1 ){
    echo "<div>" ."référence:" . $ref . "</br>" . "désignation:" . $descrProd["designation"]."</br>" . "prix:" . $descrProd["prix"] ."</br>". "</div>";
    
}


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

<div class="produit">

</div>

    
</body>
</html>


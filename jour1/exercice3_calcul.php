
<?php
// Programme appelé par le navigateur
// Rôle : calculer le prix du colis
// Paramètres 
//      POST hauteur : hauteur du colois en cm
//      POST largeur : largeur du colis en cm
//      POST epaisseur : épaisseur du colis en cm
//      POST poids du colis en KG
//      POST destination du colis


// récupérer les saisies
$hauteur = $_POST["hauteur"];
$largeur = $_POST["largeur"];
$epaisseur = $_POST["epaisseur"];
$poids = $_POST["poids"];
$destination = $_POST["destination"];

// faire le calcul et stocké le prix du colis dans prix

// si le poids ne depasse pas les deux kilos alors le prix et de 10 euros

if($poids <= 2000  ){
    $prix = 10;
    // sinon si il depasse alors le prix est de 10 euro + 1 euro par tranche de 100 gr de plus
}else if($poids >2000){
    $prix = $prix + $poid -2000 /100;
}

// si lahauteur ou la largeur ou l'épaisseur depasse 100 cm alors le prix est augmenté de 15 euros
if($hauteur  > 100 or $largeur >100 or $epaisseur >100){
     $prix = $prix + 15;
}
// si la destination est l'europe alors le prix est augmenté de 20 %
if($destination = "eu" ){
    $prix = $prix + $prix * 20 / 100;

    // sinon si c'est le reste du monde le prix est augmenté de 50%

}else if($destination = "re"){
    $prix = $prix + $prix * 50 /100;
    // sinon il reste au prix de base
}else{
   $prix = $prix;
}


 $resultat = $prix; 
















// Afficher le prix
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
    <p>Le prix du colis et de <?= $resultat ?> euros.</p>
    
</body>
</html>

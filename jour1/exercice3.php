<?php
/*
Calcul du prix d'un colis :
- on demande les 3 dimensions, le poids, et la zone de destination (France, Europe, reste du monde) 
- soyez clair sur les unités de saisie
- on a un bouton "calculer le prix"
Le prix est :
- 10 euros d'office pour les premiers 2 kg
- 1 euros de plus par 100 gr complémentaire (toute tranche comencé est due, 2,230 kg ets valorsié 2 kg + 300 grammes)
- ajout de 15 euros si une dimension au moins est supérieure à 1 mètre
- coefficient multiplicateur : +20% pour l'Europe, +50% pour le reste du monde

Bien sûr sans Javascript
*/
/*
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>
<body>

<h1>saisie des caractéristiques de l'envoi</h1>



<form action="exercice3_calcul.php" method="post">
<label>Hauteur (en cm)
    <input type="number" name="hauteur" id="">
</label><br>
<label>Largeur (en cm)
    <input type="number" name="largeur" id="">
</label><br>
<label>Epaisseur (en cm)
    <input type="number" name="epaisseur" id="">
</label><br>
<label>Poids (en Kg)
    <input type="text" step="any" name="poids" id="">
</label><br>


<select name="destination" id="">
    <option value="fr">France</option>
    <option value="eu">Europe</option>
    <option value="re">Reste du monde</option>
  
</select><br>


<input type="submit" value="calculer le prix">



</form>
</body>
</html>
*/

/*

URL de calcul du prix d'un colis

Paramètres:
    POST longueur en cm
    POST largeur en cm
    POST epaisseur en cm
    POST poids en kg
    POST destination (FR,EU,MONDE)


    Le prix est :
- 10 euros d'office pour les premiers 2 kg
- 1 euros de plus par 100 gr complémentaire (toute tranche comencé est due, 2,230 kg ets valorsié 2 kg + 300 grammes)
- ajout de 15 euros si une dimension au moins est supérieure à 1 mètre
- coefficient multiplicateur : +20% pour l'Europe, +50% pour le reste du monde
*/
// initialisation divers bug
ini_set('display_errors', 1);
error_reporting(E_ALL);

// récupéprer les paramètres
$hauteur = $_POST["hauteur"];
$largeur = $_POST["largeur"];
$epaisseur = $_POST["epaisseur"];
$poids = $_POST["poids"];
$destination = $_POST["destination"];




// calculer le prix
// prix fixe incluant les 2 premiers kg
$prix = 10;
// suplément lié au poids
if($poids <= 2){
$poidsPourSup = ($poids -2)* 10; //si poid est 2,350kg alors le supplément est de 3.50 *100 grammes
// il faut arondir au supérieur
$poidsPourSup = ceil($poidsPourSup); // on aura 4 *100 gr
// On ajoute 1 euros par tranche de 100 gr
$prix += 1 * $poidsPourSup;
}
// suplément lié aux dimensions
//  si longueur > 1 m ou largeur > 1 metre ou epaisseur >1 metre
// alors ajouter 15 euros
if($longueur > 100 or $largeur > 100 or $epaisseur >100){
    $prix += 15;
}
// Zone de destination
// si destination est Eu: ajoute 20% (multipli par 1.2)
// si c'est reste du monde: ajoute 50% (multipli par 1.5)
if($destination == "eu"){
    $prix *= 1.2;
}else if($destination == "re"){
    $prix *= 1.5;
}

// Afficher le prix
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prix d'envoi de votre colis</title>
</head>
<body>
    <p> le prix de votre colis est de <? $prix ?>euros</p>
    
</body>
</html>

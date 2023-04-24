<?php
// commentaire eb fin de ligne

/*
commentaires sur plusieurs lignes
*/ 

// Affiche des messages d'erreur ( en mode mise au point)
// commecer tour les programmes (ceus appelé depuis le navigateur)
ini_set('display_errors', 1);
error_reporting(E_ALL);

include "library/fontions.php";

// 4 variantes du include:
// include : insère le fichier à cet endroiit même si il a déjà été chargé (par exemple un morceau HTML)
// include_once: insére le fichier que si on ne l'a pas chargé (idéal pour les library de fonctions, et les classes)
//  require : idem include, plante le prgramme si le fichier n'existe pas.
// require_once : idem include_once plate le programme 

echo "bonjour";  // echo: "envoie" l'expression qui suit dans le "flux" HTML

// variables : le nom commence toujours par $
$prix = 12;  // affectation: pas de besoin de mot clé pour déclarer

// Expressions de calcul
$ttc = $prix *1.2;  // comme en JS, le point est le séparateur des décimales

// Même opération qu'en js

// concténation

$nom = "blanchot";
$prenom = "christophe";
$nomComplet = $prenom. " ". $nom; // La concaténation est le "."

$a = "1" . 2; // "12"

echo $nomComplet;

// Le  . étant la concaténation , le symbole pour séparer un objet depropriété est ->
// En JS : element.backgroundColor
// En PHP
$elt->backgroundColor = "red"; // On reverre cela quand on travaillera la programmation orientée objet

// Chaine de caractères
// le guillemets double est plus riche (des caractères spéciaux sont interprétés)
echo "$nom $prenom\n"; // Blanchot Christophe  \n saut de ligne
echo'$nom $prenom'; // $nom $prenom

// Conditions

if($nom == "Blanchot"){
    echo "C'est bien lui!";
} else if ( $nom == "durand"){
    echo "c'est l'autre";
}else{
    echo "je ne sais pas qui c'est";

}

// pour les operteurs sur les condition ET, OU, on peut les écrire:

if($prix >=8 and $prix <= 12){}
if($prix >=8 && $prix <= 12){}

// Pour le ou : or ou ||
 for($i = 1; $i < 10; $i++){
    echo "$i<br>";
 }
//  pour l'exercice 1 on a besoins de récupérer l'heure courante:

echo "<br>" . date("H") . "<br>";

// Tableaux
// liste simples
$balisesHTML = ["p", "div", "h1", "h2"];
// le premier élément est:
$elt1 = $baliseHtml[0];
// on peut ajouter un élément
$baliseHtml[] =[ "h3"];
// Tableau indexé
$contact = [
    "nom" => "Blanchot",
    "prenom" => "Christophe",
    "age" => 57,
];
$nomComplet = $contact["prenom"] . "" . $contact["nom"];
$contact["ville"] = "Chabeuil";
$contatct["age"] = 55;
unset($contact["age"]); // Supprime l'index "age dans le tableau contenu dans $contact
if(isset($contact["profession"])){ // isset retourne true si l'élément existe, false sinon
    echo $contact["profession"];

}


 ?>


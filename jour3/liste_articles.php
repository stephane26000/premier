<?php
/*

On fait maintenant un programme qui affiche la liste des articles (seulement la désignation)

*/

// initialisations
ini_set('display_errors', 1);
error_reporting(E_ALL);
// on recupere  la liste des articles
include "data/donnees.php";

// pour chaques articles

foreach ($articles as $ref => $detailArticle) {
    echo "<p>".$detailArticle['designation']."</p>";
    
}

// on affiche la designation des articles

?>

<?php 

//  Traite les données du formulaire et affiche le résultat
/*
print_r($_POST); // $_post est un tableau, 
                //dont les index sont des champs de formulaire sur un envoi par post (et les valeures sont les valeures saisies)
print_r($_GET); // $_GET est un tableau des données envoyées par la methode GET
print_r($_REQUEST); // Tableau de toutes les valeurs envoyées par GET et POST

*/

ini_set('display_errors', 1);
error_reporting(E_ALL);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merci pour vos données</title>
</head>
<body>
    bonjour <?= $_POST["nom"] ?>, vous avez <?= $_POST["age"] ?> ans
    
</body>
</html>

<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>





















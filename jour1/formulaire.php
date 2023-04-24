<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Démo sur formulaire</title>
</head>

<body>
    <!--  
    <h1>Démo sur formulaire</h1>
    <form action="formulaire_traite.php" method="post">
        <label>Votre nom
            <input type="text" name="nom">
        </label><br>
        <label>Votre age <input type="number" name="age"></label><br>
        <input type="submit" value="envoyer" >
    </form>
-->
<h1>exercice 2</h1>

<form action="exercice2_calcule.php" method="post">
<label>Nombre 1
    <input type="number" name="nombre1" id="">
</label><br>
<select name="operation" id="">
    <option value="add">+</option>
    <option value="sou">-</option>
    <option value="mul">x</option>
    <option value="div">/</option>
</select><br>
<label>Nombre 2
    <input type="number" name="nombre2" id="">
</label><br>


<input type="submit" value="calculer">



</form>
</body>

</html>

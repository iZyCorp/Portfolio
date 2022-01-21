<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sapet Arnaud - Portfolio</title>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/formation.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>

<?php include 'inc/header.php'?>

<form action="inc/traitContact.php" method="post" name="contact">
    <label for="name">Nom :</label>
    <input type="text" name="name" value="">
    <br>
    <label for="surname">Prénom :</label>
    <input type="text" name="surname" value="">
    <br>
    <label for="email">Email :</label>
    <input type="text" name="email" value="">
    <br>
    <input type="checkbox" name="email" value="">
    <label for="email">M'envoyer un courriel de confirmation</label>
    <br>
    <label>Votre sexe :</label>
    <label for="homme">Homme</label>
    <input type="radio" name="homme" value="">
    <label for="femme">Femme</label>
    <input type="radio" name="femme" value="">
    <br>
    <select name="type">
        <option value="0">Professeur</option>
        <option value="0">Eleve</option>
    </select>
    <br>
    <input type="submit" value="Envoyer"/>
</form>

<?php include 'inc/footer.php'?>

</body>
</html>
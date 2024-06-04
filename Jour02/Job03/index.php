<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire GET</title>
</head>
<body>
    <form action="" method="post">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Email :</label>
        <input type="text" id="email" name="email"><br><br>
        <label for="age">Âge :</label>
        <input type="text" id="age" name="age"><br><br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>

<?php

var_dump($_POST);

?>

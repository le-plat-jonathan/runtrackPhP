<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire GET</title>
</head>
<body>
    <form action="" method="get">
        <label for="nombre">Nombre :</label>
        <input type="text" id="nombre" name="nombre"><br><br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>

<?php 

if (isset($_GET['nombre'])) {

    $nombre = $_GET['nombre'];

    if ($nombre % 2 == 0) {
        echo "Nombre pair";
    } else {
        echo "Nombre impair";
    }
}

?>
<?php

session_start();

if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = [];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['ajouter']) && !empty($_POST['prenom'])) {
        $_SESSION['prenoms'][] = htmlspecialchars($_POST['prenom']);
    } elseif (isset($_POST['reset'])) {
        $_SESSION['prenoms'] = [];
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Formulaire de prénoms</title>
    </head>
    <body>
        <h1>Ajouter un prénom</h1>
        <form method="post" action="">
            <input type="text" name="prenom" placeholder="Entrez un prénom" required>
            <button type="submit" name="ajouter">Ajouter</button>
            <button type="submit" name="reset">Réinitialiser</button>
        </form>

        <h2>Liste des prénoms :</h2>
        <ul>
            <?php
            if (!empty($_SESSION['prenoms'])) {
                foreach ($_SESSION['prenoms'] as $prenom) {
                    echo '<li>' . htmlspecialchars($prenom) . '</li>';
                }
            } else {
                echo '<li>Aucun prénom ajouté</li>';
            }
            ?>
        </ul>
    </body>
</html>

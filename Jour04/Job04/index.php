<?php

session_start();

if (isset($_POST['connexion'])) {

    $prenom = htmlspecialchars($_POST['prenom']);

    setcookie('prenom', $prenom, time() + 3600);

    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}

if (isset($_POST['deco'])) {

    setcookie('prenom', '', time() - 3600);

    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de Connexion</title>
</head>
<body>

<?php

if (isset($_COOKIE['prenom'])) {
    echo '<p>Bonjour ' . htmlspecialchars($_COOKIE['prenom']) . ' !</p>';
    echo '<form method="post" action="">
            <button type="submit" name="deco">Déconnexion</button>
          </form>';
} else {
    echo '<form method="post" action="">
            <label for="prenom">Prénom:</label>
            <input type="text" id="prenom" name="prenom" required>
            <button type="submit" name="connexion">Connexion</button>
          </form>';
}

?>

</body>
</html>

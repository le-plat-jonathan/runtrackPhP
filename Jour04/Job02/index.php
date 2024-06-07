<?php

session_start();

if (isset($_POST['reset'])) {
    setcookie('nbVisites', '', time() - 3600);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

if (isset($_COOKIE['nbVisites'])) {
    $nbVisites = $_COOKIE['nbVisites'] + 1;
} else {
    $nbVisites = 1;
}

setcookie('nbVisites', $nbVisites, time() + 3600*24*365);

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nombre de visites</title>
</head>
<body>
    <h1>Nombre de visites</h1>
    <p>Nombre de visite de cette page <?php echo isset($nbVisites) ? $nbVisites : 0; ?>.</p>
    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>

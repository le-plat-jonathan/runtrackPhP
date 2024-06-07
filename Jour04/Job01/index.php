<?php

session_start();

if (!isset($_SESSION['nbVisites'])) {
    $_SESSION['nbVisites'] = 0;
}

if (isset($_POST['reset'])) {
    $_SESSION['nbVisites'] = 0;
} else {
    $_SESSION['nbVisites']++;
}

echo "Nombre de visites : " . $_SESSION['nbVisites'];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>

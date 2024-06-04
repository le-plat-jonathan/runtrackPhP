<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire GET</title>
</head>
<body>
    <form action="" method="post">
        <label for="username">Username :</label>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Password :</label>
        <input type="text" id="password" name="password"><br><br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>

<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'John' && $password == 'Rambo') {
        echo "C'est pas ma guerre !";
    } else {
        echo "Votre pire cauchemar !";
    }
}

?>
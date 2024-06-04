<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire Transformation Texte</title>
</head>
<body>

<form action="traitement.php" method="post">
    <label for="texte">Texte:</label><br>
    <input type="text" id="texte" name="texte"><br>
    <select name="action" id="action">
        <option value="gras">Gras</option>
        <option value="cesar">César</option>
        <option value="plateforme">Plateforme</option>
    </select><br>
    <input type="submit" value="Valider">
</form>

</body>
</html>

<?php

$texte = $_POST['texte'];
$action = $_POST['action'];

function enGras($texte) {
    $motifs = '/\b[A-Z]\w*/';
    return preg_replace_callback($motifs, function ($matches) {
        return '<strong>'. $matches[0]. '</strong>';
    }, $texte);
}

function cesar($texte, $decalage = 2) {
    $resultat = '';
    for ($i = 0; $i < strlen($texte); $i++) {
        $code = ord($texte[$i]) + $decalage;
        if ($code > 122) {
            $code -= 26;
        } elseif ($code < 97) {
            $code += 26;
        }
        $resultat.= chr($code);
    }
    return $resultat;
}

function plateforme($texte) {
    $motifs = '/\b\w*me\b/';
    return preg_replace_callback($motifs, function ($matches) {
        return $matches[0]. '_';
    }, $texte);
}

switch ($action) {
    case 'gras':
        echo nl2br(enGras($texte));
        break;
    case 'cesar':
        echo nl2br(caesar($texte));
        break;
    case 'plateforme':
        echo nl2br(plateforme($texte));
        break;
    default:
        echo "Aucune action sélectionnée.";
}

?>

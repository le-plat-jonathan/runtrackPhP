<?php
function calcule($nombre1, $operation, $nombre2) {
    switch($operation) {
        case '+':
            return $nombre1 + $nombre2;
        case '-':
            return $nombre1 - $nombre2;
        case '*':
            return $nombre1 * $nombre2;
        case '/':
            if ($nombre2 == 0) {
                return "Erreur : division par zéro";
            }
            return $nombre1 / $nombre2;
        case '%':
            if ($nombre2 == 0) {
                return "Erreur : division par zéro";
            }
            return $nombre1 % $nombre2;
        default:
            return "Erreur : opération non valide";
    }
}

echo calcule(10, '+', 5);
echo calcule(10, '-', 5);
echo calcule(10, '*', 5);
echo calcule(10, '/', 5);
echo calcule(10, '%', 5);

?>

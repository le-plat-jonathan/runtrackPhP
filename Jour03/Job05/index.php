<?php

function myStrLen($str) {
    $length = 0;
    while (isset($str[$length])) {
        $length++;
    }
    return $length;
}

function occurrences($str, $char) {

    $count = 0;
    
    for ($i = 0; $i < myStrLen($str); $i++) {

        if ($str[$i] == $char) {
            $count++;
        }

    }
    
    return $count;
}

$str = "Bonjour";
$char = "o";
echo "Le nombre d'occurrences de '$char' dans '$str' est : " . occurrences($str, $char);

?>

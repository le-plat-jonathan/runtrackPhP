<?php

$jour = true;

function bonjour($jour) {
    if ($jour == true) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
};

echo bonjour ($jour);

?>
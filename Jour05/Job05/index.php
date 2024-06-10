<?php

$bdd = new PDO('mysql:host=localhost;dbname=jour05', "root", "");

$allWomen = $bdd->query("SELECT prenom, nom, naissance FROM etudiant WHERE sexe = 'Femme'");

$women = $allWomen->fetchAll(PDO::FETCH_ASSOC);

if ($women) {

    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr>";

    foreach ($women[0] as $key => $value) {
        echo "<th>" . htmlspecialchars($key) . "</th>";
    }

    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    foreach ($women as $woman) {
        echo "<tr>";
        foreach ($woman as $value) {
            echo "<td>" . htmlspecialchars($value) . "</td>";
        }
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "Aucune étudiante de sexe féminin trouvée.";
}

?>

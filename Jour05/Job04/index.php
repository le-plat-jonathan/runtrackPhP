<?php

$bdd = new PDO('mysql:host=localhost;dbname=jour05', "root", "");

$allRooms = $bdd->query('SELECT nom, capacite FROM salle');

$rooms = $allRooms->fetchAll(PDO::FETCH_ASSOC);

if ($rooms) {

    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr>";

    foreach ($rooms[0] as $key => $value) {
        echo "<th>" . htmlspecialchars($key) . "</th>";
    }

    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    foreach ($rooms as $room) {
        echo "<tr>";
        foreach ($room as $value) {
            echo "<td>" . htmlspecialchars($value) . "</td>";
        }
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "Aucune salle trouvée.";
}

?>

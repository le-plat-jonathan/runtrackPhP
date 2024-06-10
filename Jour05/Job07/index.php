<?php

try {

    $bdd = new PDO('mysql:host=localhost;dbname=jour05', "root", "");
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $allStudents = $bdd->query(" SELECT *, TIMESTAMPDIFF(YEAR, naissance, CURDATE()) AS age FROM etudiant HAVING age < 18 ");

    $students = $allStudents->fetchAll(PDO::FETCH_ASSOC);

    if ($students) {

        echo "<table border='1'>";
        echo "<thead>";
        echo "<tr>";

        foreach ($students[0] as $key => $value) {

            if ($key !== 'age') {
                echo "<th>" . htmlspecialchars($key) . "</th>";
            }
        }

        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        foreach ($students as $student) {
            echo "<tr>";
            foreach ($student as $key => $value) {

                if ($key !== 'age') {
                    echo "<td>" . htmlspecialchars($value) . "</td>";
                }
            }
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
    } else {
        echo "Aucun étudiant trouvé.";
    }

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

?>

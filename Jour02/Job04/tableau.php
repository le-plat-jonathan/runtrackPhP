<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats du Formulaire</title>
</head>
<body>
    <h2>Résultats du Formulaire</h2>
    <table>
        <thead>
            <tr>
                <th>Arguments</th>
                <th>Valeurs</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($_POST as $key => $value) {
                    echo "<tr>";
                    echo "<td>" . $key . "</td>";
                    echo "<td>" . $value . "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>

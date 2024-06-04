<?php

$int = 42;
$float = 3.14;
$string = "Hello, World!";
$boolean = true;

$variables = [
    ['type' => 'Integer', 'name' => '$integer', 'value' => $integer],
    ['type' => 'Float', 'name' => '$float', 'value' => $float],
    ['type' => 'String', 'name' => '$string', 'value' => $string],
    ['type' => 'Boolean', 'name' => '$boolean', 'value' => $boolean ? 'true' : 'false'],
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau des Variables</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($variables as $variable): ?>
                <tr>
                    <td><?php echo htmlspecialchars($variable['type']); ?></td>
                    <td><?php echo htmlspecialchars($variable['name']); ?></td>
                    <td><?php echo htmlspecialchars($variable['value']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

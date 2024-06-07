<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morpion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

    session_start();

    if (!isset($_SESSION['grid'])) {
        reset_game();
    }

    if (isset($_POST['reset'])) {
        reset_game();
    }

    if (isset($_POST['square'])) {
        action($_POST['square']);
    }

    $winner = checkWin();

    display_grid();

    if ($winner) {
        echo "<h2 style='text-align: center;'>$winner a gagné !</h2>";
        reset_game();
    } elseif (is_draw()) {
        echo "<h2 style='text-align: center;'>Match nul !</h2>";
        reset_game();
    }

    function reset_game() {
        $_SESSION['grid'] = array_fill(1, 9, '-');
        $_SESSION['turn'] = 'X';
    }

    function action($square) {
        if ($_SESSION['grid'][$square] == '-') {
            $_SESSION['grid'][$square] = $_SESSION['turn'];
            $_SESSION['turn'] = $_SESSION['turn'] == 'X' ? 'O' : 'X';
        }
    }

    function display_grid() {
        echo "<form class='grid' method='post'>";
        echo "<table class='tableau'>";
        for ($i = 1; $i <= 9; $i += 3) {
            echo "<tr>";
            for ($j = 0; $j < 3; $j++) {
                $index = $i + $j;
                $value = $_SESSION['grid'][$index];
                if ($value == '-') {
                    echo "<td><button type='submit' name='square' value='$index'>-</button></td>";
                } else {
                    echo "<td>$value</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "<br><button type='submit' name='reset'>Réinitialiser la partie</button>";
        echo "</form>";
    }

    function checkWin() {
        $grid = $_SESSION['grid'];
        $combinaisons = [
            [1, 2, 3], [4, 5, 6], [7, 8, 9],
            [1, 4, 7], [2, 5, 8], [3, 6, 9],
            [1, 5, 9], [3, 5, 7]
        ];

        foreach ($combinaisons as $combinaison) {
            if ($grid[$combinaison[0]] != '-' && $grid[$combinaison[0]] == $grid[$combinaison[1]] && $grid[$combinaison[1]] == $grid[$combinaison[2]]) {
                return $grid[$combinaison[0]];
            }
        }
        return null;
    }

    function is_draw() {
        return !in_array('-', $_SESSION['grid']);
    }

?>

</body>
</html>

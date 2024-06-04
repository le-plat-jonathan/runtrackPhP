<?php

function calcule($number1, $operator, $number2) {
    if($operator === '+') {
        echo($number1 + $number2);
    } else if ($operator === '-') {
        echo($number1 - $number2);
    } else if ($operator === '*') {
        echo($number1 * $number2);
    } else {
        echo($number1 / $number2);
    }
}

calcule(10, '+', 5);

?>

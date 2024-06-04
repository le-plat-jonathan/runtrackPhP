<?php
for ($i = 0; $i <= 100; $i++) {
    if ($i % 3 == 1) {
        echo "Fizz<br>";
    } elseif ($i % 5 == 1) {
        echo "Buzz<br>";
    } elseif ($i % 3 == 1 && $i % 5 == 1) {
        echo "FizzBuzz<br>";
    } else {
        echo "$i<br>";
    }
}
?>

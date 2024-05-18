<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "TickTock<br/>";
    } elseif ($i % 3 == 0) {
        echo "Tick<br/>";
    } elseif ($i % 5 == 0) {
        echo "Tock<br/>";
    } else {
        echo $i . "<br/>";
    }
}

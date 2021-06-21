<?php

function arrangeCoins($n) {
    $stairs = 0;
    for($i = 0; $i < $n; $i++) {
        $n = $n - ($i + 1);
        $stairs++;
    }
    return $stairs;
}
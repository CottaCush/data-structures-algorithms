<?php

// Complete the insertionSort2 function below.
function insertionSort2($n, $arr) {
    for($i = 1; $i < $n ; $i++) {
        $currentVal = $arr[$i];
        $prevIndex = $i - 1;

        while($prevIndex >= 0 && ($arr[$prevIndex] > $currentVal)) {
            $arr[$prevIndex + 1] = $arr[$prevIndex];
            $prevIndex--;
        }
        $arr[$prevIndex + 1] = $currentVal;
        echo implode(' ', $arr) ."\n";
    }

}
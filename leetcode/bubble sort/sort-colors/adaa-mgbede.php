<?php

function sortColors(&$nums) {
    $n = sizeof($nums);
    $i = 0;

    // Iterate through all array elements
    while($i < $n){

        for ($j = 0; $j < $n - $i - 1; $j++) {
            // iterate the array from 0 to $n - i - 1
            // Swap if the element found is greater than the next element
            if ($nums[$j] > $nums[$j + 1]) {
                $temp = $nums[$j];
                $nums[$j] = $nums[$j + 1];
                $nums[$j + 1] = $temp;
                //list($nums[$j + 1], $nums[$j]) = [$nums[$j], $nums[$j + 1]];
            }
        }
        $i++;
    }
}
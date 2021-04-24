<?php

function searchInsert($nums, $target) {
    $first = 0;
    $last = count($nums) - 1;

    while($first <= $last) {
        $midpoint = (int)(($first + $last)/2);

        if($nums[$midpoint] == $target) {
            return $midpoint;
        } elseif($nums[$midpoint] < $target) {
            $first = $midpoint + 1;
        } else {
            $last = $midpoint - 1;
        }
    }
    return $first;
}
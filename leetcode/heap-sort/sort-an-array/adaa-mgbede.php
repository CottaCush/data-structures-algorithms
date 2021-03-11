<?php

/**
 * @param Integer[] $nums
 * @return Integer[]
 */
function sortArray($nums) {
    $n = count($nums);

    $heapSize = (int)($n/2) - 1;

    for ($i = $heapSize; $i >= 0; $i--) {
        maxHeap($nums, $n, $i);
    }

    for ($i = $n; $i >= 2; $i--) {
        $k = $i - 1;
        list($nums[$k], $nums[0]) = [$nums[0], $nums[$k]];
        maxHeap($nums, $k, 0);
    }
    return $nums;
}

function maxHeap(&$arr, $n, $i) {
    $j = $i;
    $l = (2 * $i) + 1;
    $r = (2 * $i) + 2;
    if($l < $n && $arr[$l] > $arr[$j]) $j = $l;
    if($r < $n && $arr[$r] > $arr[$j]) $j = $r;

    if ($j != $i) {
        list($arr[$j], $arr[$i]) = [$arr[$i], $arr[$j]];
        maxHeap($arr, $n, $j);
    }
}
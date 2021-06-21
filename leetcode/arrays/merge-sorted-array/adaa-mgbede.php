<?php

class SolutionMSA {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {
        foreach($nums2 as $i => $num2) {
            $nums1[$m + $i] = $num2;
        }
        sort($nums1);
    }
}
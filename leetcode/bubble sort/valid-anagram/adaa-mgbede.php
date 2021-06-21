<?php

function isAnagram($s, $t)  {
    if (rearrange($s) === rearrange($t)) {
        return true;
    }
    return false;
}

function rearrange($str) {
    $arr = str_split($str);
    sort($arr);
    return implode('', $arr);
}
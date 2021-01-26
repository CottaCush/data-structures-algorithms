<?php

class Solutiono {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
        if ($this->rearrange($s) === $this->rearrange($t)) {
            return true;
        }
        return false;
    }

    function rearrange($str) {
        $arr = str_split($str);
        sort($arr);
        return implode('', $arr);
    }
}

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

echo isAnagram('anagram', 'nagaram');//1
echo isAnagram('rat', 'car');//0
echo isAnagram('', 'gh'); //0
echo isAnagram('ab', ''); //0
echo isAnagram('', ''); // 1
echo isAnagram("a", "ab"); // 0
echo isAnagram("aacc", "ccac"); // 0
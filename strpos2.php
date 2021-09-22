<?php

class Solution
{

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle)
    {
        $x = strpos($haystack, $needle);
        if (strlen($needle) == 0) {
            return 0;
        } elseif ($x === false) {
            return -1;
        } else {
            return $x;
        }
    }
}

$obj = new Solution();
$haystack = "aaaaaaa";
$needle = "bba";
echo $obj->strStr($haystack, $needle);

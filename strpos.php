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
        if (strlen($haystack) == 0 && strlen($needle) == 0) {
            return 0;
        }
        if (strlen($haystack) == 0 && strlen($needle) != 0) {
            return -1;
        }
        if (strlen($haystack) != 0 && strlen($needle) == 0) {
            return 0;
        }
        if (strlen($needle) > strlen($haystack)) {
            return -1;
        }
        $position = -1;
        for ($i = 0; $i < strlen($haystack); $i++) {
            if ($haystack[$i] == $needle[0]) {
                $position = $i;
                $count = 1;
                for ($j = 1; $j < strlen($needle); $j++) {

                    $i++;
                    if ($haystack[$i] == $needle[$j]) {
                        $count += 1;
                        continue;
                    } else {
                        $i = $position;
                        $position = -1;
                        break;
                    }
                }
                if ($count == strlen($needle)) {
                    return $position;
                }
            } else {
                continue;
            }
        }
        return $position;
    }
}

$obj = new Solution();
$haystack = "hello";
$needle = "ll";
echo $obj->strStr($haystack, $needle);

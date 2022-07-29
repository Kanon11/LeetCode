<?php
class Solution
{

    function isSubsequence($s, $t)
    {
        $s_len = strlen($s) - 1;
        $t_len = strlen($t) - 1;
        for ($i = 0, $j = 0; $i <= $t_len; $i++) {
            if ($s[$j] == $t[$i]) {
                $j++;
            }
        }
        return (--$j == $s_len);
    }
}

$obj = new Solution();
print_r($obj->isSubsequence("axc", "ahbgdc"));

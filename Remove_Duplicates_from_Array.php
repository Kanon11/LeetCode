<?php

use Solution as GlobalSolution;

class Solution
{
    function removeDuplicates(&$nums)
    {
        if (count($nums) == 0) {
            return 0;
        } else {
            $count = 1;
            for ($i = 1; $i < count($nums); $i++) {
                if ($nums[$i - 1] != $nums[$i]) {
                    $nums[$count] = $nums[$i];
                    $count++;
                }
            }
            return $count;
        }
    }
}

$obj = new Solution();
$a = [0, 0, 1, 1, 1, 2, 2, 3, 3, 4];
$out = $obj->removeDuplicates($a);
echo $out . '\n';
echo '<pre>';
print_r($a);
echo '</pre>';

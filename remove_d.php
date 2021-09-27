<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function removeDuplicates(&$nums)
    {
        $count = 0;
        $n = count($nums);
        for ($i = 1; $i < $n; $i++) {
            if ($nums[$i - 1] != $nums[$i]) {
                $count++;
                $nums[$count] = $nums[$i];
            }
        }
        return $count + 1;
    }
}

$obj = new solution();
$nums = [0, 0, 1, 1, 1, 2, 2, 3, 3, 4];
$obj->removeDuplicates($nums);

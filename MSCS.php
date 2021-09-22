<?php
class Solution
{
    function maxSubArray($nums)
    {
        $n = $this->checkNegativeArray($nums);
        if ($n[0] == 1) {
            return $n[1];
        }
        $m = $this->checkPositiveArray($nums);
        if ($m[0] == 1) {
            return $m[1];
        } else {
            $sum = 0;
            $maxsum = PHP_INT_MIN;
            foreach ($nums as  $value) { //[-2, 1, -3, 4, -1, 2, 1, -5, 4];
                if ($value > $maxsum) {
                    $maxsum = $value;
                }
                $sum = $sum + $value;
                if ($sum < 0) {
                    $sum = 0;
                } else if ($sum > $maxsum) {
                    $maxsum = $sum;
                }
            }
            return $maxsum;
        }
    }
    function checkPositiveArray($nums)
    {
        $flag = 1;
        $min = PHP_INT_MIN;
        foreach ($nums as $key => $value) {
            if ($value < 0) {
                $flag = 0;
                break;
            }
        }
        if ($flag == 1) {
            return [$flag, array_sum($nums)];
        } else {
            return [$flag, $min];
        }
    }
    function checkNegativeArray($nums)
    {
        $flag = 1;
        $min = PHP_INT_MIN;
        foreach ($nums as $key => $value) {
            if ($value < 0) {
                if ($value > $min) {
                    $min = $value;
                }
            } else {
                $flag = 0;
            }
        }
        return [$flag, $min];
    }
}
$obj = new Solution();
$a = [-2, 1, -3, 4, -1, 2, 1, -5, 4];
// $a = [2, 1, -13, 4];
echo ($obj->maxSubArray($a));

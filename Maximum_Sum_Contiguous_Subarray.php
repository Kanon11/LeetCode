<?php
class Solution
{
    function maxSubArray($nums)
    {
        if ($this->allNegative($nums)) {
            return max($nums);
        }
        if ($this->allPositive($nums)) {
            return array_sum($nums);
        }
        $maxsum = PHP_INT_MIN;
        $currentSum = 0;
        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] > $maxsum) {
                $maxsum = $nums[$i];
            }
            $currentSum += $nums[$i];
            if ($currentSum < 0) {
                $currentSum = 0;
            }
            if ($currentSum > $maxsum) {
                $maxsum = $currentSum;
            }
        }

        return    $maxsum;
    }
    function allNegative($nums)
    {
        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] > 0) {
                return false;
            }
        }
        return true;
    }

    function allPositive($nums)
    {
        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] < 0) {
                return false;
            }
        }
        return true;
    }
}

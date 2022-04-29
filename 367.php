<?php
class Solution
{

    function isPerfectSquare($num)
    {
        if ($num == 1) return true;
        $l = 0;
        $r = $num;
        while (($l + 1) < $r) {
            $mid = (int)(($l + $r) / 2);
            if ($mid * $mid == $num) {
                return true;
            } else if ($mid * $mid > $num) {
                $r = $mid;
            } else {
                $l = $mid;
            }
        }
        return false;
    }
}
$obj = new Solution();
$nums = 1;
$ans = $obj->isPerfectSquare($nums);
echo $ans;

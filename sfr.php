<?php
class Solution
{


    function searchRange($nums, $target)
    {
        $l = 0;
        $h = count($nums) - 1;
        $result1 = -1;
        while ($l <= $h) {
            $mid = (int)(($l + ($h - $l) / 2));
            if ($nums[$mid] == $target) {
                $result1 = $mid;
                $h = $mid - 1;
            } else if ($nums[$mid] > $target) {
                $h = $mid - 1;
            } else {
                $l = $mid + 1;
            }
        }
        $l = 0;
        $h = count($nums) - 1;
        $result2 = -1;
        while ($l <= $h) {
            $mid = (int)(($l + ($h - $l) / 2));
            if ($nums[$mid] == $target) {
                $result2 = $mid;
                $l = $mid + 1;
            } else if ($nums[$mid] > $target) {
                $h = $mid - 1;
            } else {
                $l = $mid + 1;
            }
        }
        return [$result1,$result2];
    }

}
$obj = new Solution();
$n = [5, 7, 7, 8, 8, 10, 10, 10, 10, 10, 10, 11];
$t = 1;
echo "<pre>";
print_r($obj->searchRange($n, $t));
echo "</pre>";

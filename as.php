<?php
class Solution
{

    public function search($nums, $target)
    {
        $l = 0;
        $h = count($nums) - 1;
        if ($target < $nums[$l]) {
            return 0;
        }
        if ($target > $nums[$h]) {
            return $h + 1;
        }
        while ($l <= $h) {
            $mid = (int) (($l + $h) / 2);
            if ($nums[$mid] == $target) {
                while($mid >= 0 && $nums[$mid] == $target){
                    $mid-=1;
                    $flag=1;
                }
                $mid = ($flag==1) ? $mid+1 : $mid ;
                return $mid;
            } elseif ($nums[$mid] > $target) {
                $h = $mid - 1;
            } else {
                $l = $mid + 1;
            }
        }
        return $l;
    }
}
$obj = new Solution();
$n = [1,2,2,4];
$t = 3;
echo "<pre>";
print_r($obj->search($n, $t));
echo "</pre>";



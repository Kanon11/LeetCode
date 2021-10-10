<?php
class Solution
{
    function search($nums, $target)
    {
        $pivot=$this->pivot($nums);
        $l=0;
        $h=$pivot-1;
        $ans=-1;
        while($l<=$h){
            $mid = (int)(($l + $h) / 2);
            if($nums[$mid]==$target){
                $ans=$mid;
                break;
            }
            else if($nums[$mid]>$target){
                $h=$mid-1;
            }
            else {
                $l=$mid+1;
            }
        }
        if ($ans!=-1) {
           return $ans;
        } else {
            $l = $pivot;
            $h = count($nums)-1;;
            while ($l <= $h) {
                $mid = (int)(($l + $h) / 2);
                if ($nums[$mid] == $target) {
                    return $mid;
                } else if ($nums[$mid] > $target) {
                    $h = $mid - 1;
                } else {
                    $l = $mid + 1;
                }
            }
            return -1;
        }
        

    }

    public function pivot($nums)
    {
        $l = 0;
        $h = count($nums) - 1;
        while ($l <= $h) {
            $mid = (int)(($l + $h) / 2);
            if (($mid - 1 >= 0) && $nums[$mid] < $nums[$mid - 1]) {
                return $mid;
            } else if ($nums[$mid] <= $nums[$h]) {
                $h = $mid - 1;
            } else {
                $l = $mid + 1;
            }
        }
        return $mid;
    }
}
$obj = new Solution();
$n = [3,1];
$t = 3;
echo "<pre>";
print_r($obj->search($n, $t));
echo "</pre>";

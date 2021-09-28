<?php
class Solution
{
    public $ans = [];
    public function minCostClimbingStairs($cost)
    {
        for ($i = 0; $i < count($cost); $i++) {
            if ($i <= 1) {
                $this->ans[$i] = $cost[$i];
            } else {
                $this->ans[$i] = $cost[$i] + min($this->ans[$i - 1], $this->ans[$i - 2]);}
        }
        return min($this->ans[count($this->ans) - 1], $this->ans[count($this->ans) - 2]);
    }
}
$obj = new Solution();
$cost = [10,15,20];
echo "<pre>";
print_r($obj->minCostClimbingStairs($cost));
echo "</pre>";

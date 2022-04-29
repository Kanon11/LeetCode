<?php
class Solution
{
    

    function Perfect_squert($nums)
    {
        for ($i = 1; $i <= $nums/2; $i++) {
            $store=(int)($i * $i);
            if ($store == $nums) {
                return "true";
            } 
            else if ($store>$nums){
                return "false";
            }
        }

        return "false";
    }
}

$obj = new Solution();
$nums = 160;
$ans = $obj->Perfect_squert($nums);
echo $ans;
// echo "<pre>";
// print_r($nums);
// echo "</pre>";

//81

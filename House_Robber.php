<?php
class Solution
{

    public function rob($nums)
    {
        $ans[] = $nums[0];
        $ans[] = $nums[1];
        $ans[] = $nums[2] + $ans[0];
        for ($i = 3; $i < count($nums); $i++) {
            $ans[] = $nums[$i] + max($ans[$i - 2], $ans[$i - 3]);
        }
        return max($ans);

    }
}

$obj = new Solution();
$a = [1, 2, 3, 1];
print_r($obj->rob($a));

<?php

class Solution
{

    function validateStackSequences($pushed, $popped)
    {
        $pivot = 0;
        $len = count($pushed);
        $ans = [];
        for ($i = 0; $i < $len; $i++) {
            if ($pushed[$i] == $popped[$pivot]) {
                $pivot += 1;
                while (count($ans) > 0 && $ans[array_key_last($ans)] == $popped[$pivot]) {
                    array_pop($ans);
                    $pivot += 1;
                }
            } else {
                array_push($ans, $pushed[$i]);
            }
        }
        for($i=$pivot;$i<count($popped);$i++){
            if ($popped[$i]!=array_pop($ans)) {
                return false;
            }
        }
        return count($ans)>0?false:true;
    }
}
$obj = new Solution();
// $pushed = [1, 2, 3, 4, 5];
// $popped =[4, 5, 3, 2, 1];
// $popped= [4, 3, 5, 1, 2];
$pushed = [2,1,0];
$popped = [ 1, 2,0];
echo "<pre>";
print_r($obj->validateStackSequences($pushed, $popped));
echo "</pre>";

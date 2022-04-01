<?php

class Solution
{

    function divideArray($nums)
    {
        sort($nums);
        $ans=[];
        $paircount=0;
        foreach ($nums as  $value) {
            if(count($ans)>0){
                $temp=$ans[array_key_last($ans)];
                if($temp==$value){
                    $paircount+=1;
                    array_pop($ans);
                }
                else{
                    array_push($ans,$value);
                }

            }
            else{
                array_push($ans,$value);
            }
            
        }
        return $paircount>=(count($nums)/2)?true:false;
    }
}
$obj = new Solution();
$pushed = [1, 2, 3, 4, 5];
// $pushed = [3, 2, 3, 2, 2, 2];
echo "<pre>";
print_r($obj->divideArray($pushed));
echo "</pre>";

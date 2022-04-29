<?php
class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums)
    {
        $len=count($nums)-1;
        $indigator=1;
        for ($i=1; $i <=$len ; $i++) { 
            if(($nums[$i]==$nums[$i-1])){
                $nums[$indigator++]=$nums[$i];
                $nums[$indigator++]=$nums[$i-1];
            }
        }
        return $indigator;
    }
}

$obj=new Solution();
$nums=[1, 1, 1, 2, 2, 3];
$ans=$obj->removeDuplicates($nums);
echo $ans;
echo"<pre>";
print_r($nums);
echo"</pre>";
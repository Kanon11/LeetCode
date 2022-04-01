<?php
// a array [3,2,4,4,8,1,1] 
// 
// [3,2,8]
class Solution
{
    public $ans = [];
    public function remove_duplicate($n)
    {
        $as=array();
        $returning_array=array();
        $indicator=0;
        $count=1;
        foreach ($n as  $key=>$value) {
           if($value!=$n[$indicator]){
               ++$indicator;
                $returning_array[++$count]=$n[$key];

           }
        }
        return $returning_array;
    }
}

$obj = new Solution();
$a=[3,2,4,4,8,1,1];
echo '<pre>';
print_r($obj->remove_duplicate($a));
echo '</pre>';

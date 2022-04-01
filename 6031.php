<?php
class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $key
     * @param Integer $k
     * @return Integer[]
     */
    function findKDistantIndices($nums, $key, $k)
    {
        $index_match=array();
        $return_array=array();
        foreach ($nums as $index => $value) {
            if($key==$value){
                $index_match[]= $index;
            }
        }
        foreach ($nums as $i => $i_value) {
            $flag=0;
            foreach ($index_match as $j => $j_value) {
                if (abs($i- $j_value)<=$k) {
                  $flag=1;
                  break;
                }
            }
            if($flag==1){
            $return_array[]=$i;
            }


        }
        sort($return_array);
        return  $return_array;
    }
}
$obj = new Solution();
$nums = [2, 2, 2, 2, 2];
$key = 2;
$k = 2;
echo '<pre>';
print_r($obj->findKDistantIndices($nums,$key,$k));
echo '</pre>';

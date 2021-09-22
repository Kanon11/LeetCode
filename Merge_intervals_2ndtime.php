<?php
class Solution
{

    function merge($intervals)
    {
         sort($intervals);
        $ans = [];
        $ans[] = $intervals[0];
        $i = 1;
        $n = count($intervals) - 1;
        while ($i <= $n) {
            $a = $ans[count($ans) - 1][0];
            $b = $ans[count($ans) - 1][1];
            $c = $intervals[$i][0];
            $d = $intervals[$i][1];


            if ($a < $c && $b < $c) {
                $ans[] = $intervals[$i];
                $i++;
            } else if ($a <= $c && $c <= $b && $d >= $b) {
                array_pop($ans);
                $ans[] = [$a, $d];
                $i++;
            } else if ($a < $c && $b > $d) {
                $i++;
            }
        }
        return $ans;
    }
}
// class Solution {

//     /**
//      * @param Integer[][] $intervals
//      * @return Integer[][]
//      */
//     function merge($intervals) {
//         sort($intervals);
//         $start=$intervals[0][0];
//         $end = $intervals[0][1];
//         $resultArr = array();
//         $resultArr[0] = $intervals[0];
//         $i=1;
//         $j=0;
//         while($i<count($intervals)){
//             $curr_arr = $intervals[$i];
//             $curr_start = $curr_arr[0];
//             $curr_end = $curr_arr[1];

//             if($curr_start<=$end){
//                 if($curr_end>$end){
//                     $end = $curr_end;
//                 }
//                 if($curr_start<$start){
//                     $start=$curr_start;
//                 }

//                 $resultArr[$j][0]=$start;
//                 $resultArr[$j][1]=$end;
//             }else{
//                 $j++;
//                 $resultArr[$j][0]=$curr_start;
//                 $resultArr[$j][1]=$curr_end;
//                 $start=$curr_start;
//                 $end = $curr_end;

//             }
//             $i++;
//         }

//         return $resultArr;
//     }
// }
$obj = new Solution();
$intervals[] = [1, 4];
$intervals[] = [2, 3];
echo "<pre>";
print_r($obj->merge($intervals));
echo "</pre>";

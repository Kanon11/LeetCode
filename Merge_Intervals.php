<?php
class Solution
{

    /**
     * @param Integer[][] $intervals
     * @return Integer[][]
     */
    function merge($intervals)
    {
        sort($intervals);
        $output = array();
        foreach ($intervals as $key => $value) {
            if (count($output) == 0) {
                $output[] = $value;
            } else {
                $a = $output[count($output) - 1];
                if ($value[0] <= $a[1] && $value[1] >= $a[1]) {
                    $x = array();
                    $x[] = $a[0];
                    $x[] = $value[1];
                    $output[count($output) - 1] = $x;
                } else if ($value[0] > $a[1] && $value[1] > $a[0]) {
                    $output[] = $value;
                }
            }
        }
        return $output;
    }
}
$intervals = array(array(1, 4),  array(2, 3));
$obj = new Solution();
$obj->merge($intervals);

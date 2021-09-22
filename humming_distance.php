<?php

$obj = new Solution();
echo $obj->hammingDistance(1, 4);

class Solution
{
    function hammingDistance($x, $y)
    {
        $a = $this->int_to_binary($x);
        $b = $this->int_to_binary($y);

        if (count($a) > count($b)) {
            $b = array_pad($b, -count($a), 0);
        } else {
            $a = array_pad($a, -count($b), 0);
        }
        $count = 0;
        for ($i = 0; $i < count($a); $i++) {
            if ($a[$i] != $b[$i]) {
                $count++;
            }
        }
        return $count;
    }
    function int_to_binary($a)
    {
        $bits = [];
        while ($a > 0) {
            $res = (int) ($a % 2);
            $bits[] = $res;
            $a = (int) ($a / 2);
        }
        return array_reverse($bits);
    }
}

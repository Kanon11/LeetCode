<?php
class Solution
{
    protected $roman = array(
        "I" => 1,
        "V" => 5,
        "X" => 10,
        "L" => 50,
        "C" => 100,
        "D" => 500,
        "M" => 1000
    );

    function romanToInt($s)
    {
        $len = strlen($s) - 1;
        if($len==0){
            return $this->roman[$s[$len]];
        }
        $sum = 0;
        $f = 1;
        for ($i = 1; $i <= $len;) {
            if($f==0){
                $i++;
            }
            $prev = $this->roman[$s[$i - 1]]; //1000
            if($i>$len){
                $sum += $prev;
                return $sum;
            }
            $now = $this->roman[$s[$i]]; //100
            if ($prev >= $now) {
                $f = 1;
                $sum += $prev;
                $i++;
            } else {
                $f = 0;
                $sum += $now;
                $sum -= $prev;
                $i++;
            }
        }
        // return $sum;
        if ($f == 1) {
            $sum += $this->roman[$s[$len]];
            return $sum;
        } else {
            return $sum;
        }
    }
}

$obj = new Solution();
$s = "MCMXCIV";
echo $obj->romanToInt($s);

<?php
class Solution
{


    function myPow($x, $n)
    {
        if ($n == 0) return 1;
        if ($n < 0) {
            $x = 1 / $x;
            return ((int)($n % 2) == 0) ? $this->myPow($x * $x, -(int)($n / 2)) : ($x * $this->myPow($x * $x, -(int)($n / 2)));
        }
        if ($n == PHP_INT_MIN) {
            return ($this->myPow($x, PHP_INT_MIN + 1) / $x);
        }
        return ((int)($n % 2) == 0) ? $this->myPow($x * $x, (int)($n / 2)) : ($x * $this->myPow($x * $x, (int)($n / 2)));

    }
}
$obj=new Solution();
echo $obj->myPow(0.999999999,- 2147483648);
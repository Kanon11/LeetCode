<?php

class Solution
{

    public $ans = [];
    public function tribonacci($n)
    {
        if ($n <= 1) {
            return $n;
        } else if ($n == 2) {
            return 1;
        } else {
            if (!empty($this->ans[$n])) {
                return $this->ans[$n];
            } else {
                return $this->ans[$n] = $this->tribonacci($n - 1) + $this->tribonacci($n - 2) + $this->tribonacci($n - 3);
            }

        }

    }
}

$obj = new Solution();
echo ($obj->tribonacci(25));

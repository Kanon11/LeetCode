<?php

class Solution
{
    public $ans = [];
    public function fib($n)
    {
        // if ($n <= 1) {
        //     return $n;
        // } else {
        //     if (!empty($this->ans[$n])) {
        //         return $this->ans[$n];
        //     }
        //     return $this->ans[] = $this->fib($n - 2) + $this->fib($n - 1);

        // }

        $a = [];
        $a[0] = 0;
        $a[1] = 1;
        for ($i = 2; $i < $n; $i++) {
            if ($i <= 1) {
                $a[$i];
            } else {
                $a[$i] = $a[$i - 1] + $a[$i - 2];
            }

        }
        return $a[count($a) - 1];

    }
}

$obj = new Solution();
print_r($obj->fib(5));

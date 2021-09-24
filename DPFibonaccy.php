<?php

class solution
{
    public $ans = [];

    public function fib($n)
    {
        if ($n <= 1) {
            return $n;
        }
        if (empty($this->ans[$n - 2])) {
            $f2 = $this->fib($n - 2);

        } else {
            $f2 = $this->ans[$n - 2];
        }
        if (empty($this->ans[$n - 1])) {
            $f1 = $this->fib($n - 1);
        } else {
            $f1 = $this->ans[$n - 1];

        }
        $this->ans[$n] = $f1 + $f2;
        return $this->ans[$n];

    }
}

$obj = new solution();
print_r($obj->fib(6));

<?php
class Solution
{

    public $dp = [];
    public function uniquePaths($m, $n)
    {
        if ($m == 1 || $n == 1) {
            return 1;
        } else if (!empty($this->dp[$m][$n])) {
            return $this->dp[$m][$n];
        } else {
            $this->dp[$m][$n] = $this->uniquePaths($m, $n - 1) + $this->uniquePaths($m - 1, $n);
            return $this->dp[$m][$n];
        }
    }
}

$obj = new solution();
print_r($obj->uniquePaths(3, 3));

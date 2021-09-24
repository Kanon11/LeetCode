<?php

class Solution
{
    public $grid = [];
    public function uniquePaths($m, $n)
    {
        if ($m == 1 || $n == 1) {
            return 1;
        }
        if (empty($this->grid[$m][$n - 1])) {
            $f1 = $this->uniquePaths($m, $n - 1);
        } else {
            $f1 = $this->grid[$m][$n - 1];
        }
        if (empty($this->grid[$m - 1][$n])) {
            $f2 = $this->uniquePaths($m - 1, $n);
        } else {
            $f2 = $this->grid[$m - 1][$n];
        }
        $this->grid[$m][$n] = $f1 + $f2;
        return $this->grid[$m][$n];

    }
}
$obj = new Solution();
echo $obj->uniquePaths(4, 4);

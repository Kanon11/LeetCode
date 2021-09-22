<?php
class Solution
{

    /**
     * @param Integer[][] $mat
     * @return Integer
     */

    function diagonalSum($mat)
    {
        $sum = 0;
        $row = count($mat);
        $col = count($mat[0]);
        for ($i = 1; $i <= $row; $i++) {
            for ($j = 1; $j <= $col; $j++) {
                $flag = 0;
                if (($i + $j) == ($row + 1)) {
                    $sum += (int) ($mat[$i - 1][$j - 1]);
                    $flag = 1;
                }
                if ($i == $j && $flag == 0) {
                    $sum += (int) ($mat[$i - 1][$j - 1]);
                }
            }
        }
        return $sum;
    }
}
$x = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
$obj = new Solution();
$o = $obj->diagonalSum($x);
echo $o;

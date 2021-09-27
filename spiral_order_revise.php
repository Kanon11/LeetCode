<?php
class Solution
{

    /**
     * @param Integer[][] $matrix
     * @return Integer[]
     */
    public function spiralOrder($matrix)
    {
        $ans = [];
        $left = 0;
        $right = count($matrix[0]) - 1;
        $top = 0;
        $bottom = count($matrix) - 1;
        $direction = 0;
        while ($left <= $right && $top <= $bottom) {
            if ($direction == 0) {
                for ($i = $left; $i <= $right; $i++) {
                    $ans[] = $matrix[$top][$i];
                }
                $top++;

            } else if ($direction == 1) {
                for ($i = $top; $i <= $bottom; $i++) {
                    $ans[] = $matrix[$i][$right];
                }
                $right--;
            } else if ($direction == 2) {
                for ($i = $right; $i >= $left; $i--) {
                    $ans[] = $matrix[$bottom][$i];
                }
                $bottom--;
            } else if ($direction == 3) {
                for ($i = $bottom; $i >= $top; $i--) {
                    $ans[] = $matrix[$i][$left];
                }
                $left++;
            }
            $direction = (int) (($direction + 1) % 4);
        }
        return $ans;

    }
}

$obj = new Solution();
$m = [[1, 2, 3, 4], [5, 6, 7, 8], [9, 10, 11, 12]];
echo "<pre>";
print_r($obj->spiralOrder($m));
echo "</pre>";

<?php

use Solution as GlobalSolution;

class Solution
{
    function spiralOrder($matrix)
    {
        $output = array();

        $direction = 0;
        $top = 0;
        $right = count($matrix[0]) - 1;
        $bottom = count($matrix) - 1;
        $left = 0;
        while ($left <= $right && $bottom >= $top) {

            if ($direction == 0) { // left to right
                for ($i = $left; $i <= $right; $i++) {
                    $output[] = $matrix[$top][$i];
                }

                $top++;
            } else if ($direction == 1) { // top to bottom
                for ($i = $top; $i <= $bottom; $i++) {
                    $output[] = $matrix[$i][$right];
                }

                $right--;
            } else if ($direction == 2) { // right to left 
                for ($i = $right; $i >= $left; $i--) {
                    $output[] = $matrix[$bottom][$i];
                }

                $bottom--;
            } else if ($direction == 3) { //bottom to top
                for ($i = $bottom; $i >= $top; $i--) {
                    $output[] = $matrix[$i][$left];
                }
                $left++;
            }
            $direction = (int) (($direction + 1) % 4);
        }
        return $output;
    }
}
$x = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

$obj = new Solution();
$x = $obj->spiralOrder($x);

foreach ($x as $key => $value) {
    echo $value . " ";
}

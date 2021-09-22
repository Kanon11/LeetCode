<?php
$matrix = array(array(1, 2, 3, 4), array(5, 6, 7, 8), array(9, 10, 11, 12));
$output = spiral_order($matrix);

foreach ($output as $key => $value) {
    echo $value . "\n";
}
function spiral_order($matrix)
{
    $linear_array = array();
    $left = 0;
    $right = count($matrix[0]) - 1;
    $top = 0;
    $bottom = count($matrix) - 1;
    $direction = 0;
    while ($left <= $right && $top <= $bottom) {
        if ($direction == 0) {
            for ($i = $left; $i <= $right; $i++) {
                $linear_array[] = $matrix[$top][$i];
            }
            $top++;
        } elseif ($direction == 1) {
            for ($i = $top; $i <= $bottom; $i++) {
                $linear_array[] = $matrix[$i][$right];
            }
            $right--;
        } elseif ($direction == 2) {

            for ($i = $right; $i >= $left; $i--) {
                $linear_array[] = $matrix[$bottom][$i];
            }
            $bottom--;
        } else {
            for ($i = $bottom; $i >= $top; $i--) {
                $linear_array[] = $matrix[$i][$left];
            }
            $left++;
        }
        $direction = ($direction + 1) % 4;
    }
    return $linear_array;
}

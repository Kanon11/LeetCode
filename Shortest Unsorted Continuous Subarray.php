<?php
$a = array(3, 2, 1);
echo findUnsortedSubarray($a);

function findUnsortedSubarray($a)
{
    $left = 0;
    $right = count($a) - 1;
    $start = 0;
    $end = 0;
    $max = $a[$left];
    $min = $a[$right];
    for ($i = $left; $i <= $right; $i++) {
        $max = max($max, $a[$i]);
        $min = min($min, $a[$right - $i]);
        if ($a[$i] < $max) {
            $start = $i;
        }
        if ($a[$right - $i] > $min) {
            $end = $right - $i;
        }
    }
    return $start - $end + 1;
}

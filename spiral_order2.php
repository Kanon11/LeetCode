<?php
$n = 3;
$matrix = array(array(0, 0, 0), array(0, 0, 0), array(0, 0, 0));
$i = 1;
$top = 0;
$bottom = 2;
$left = 0;
$ritht = 2;
$direction = 0;
while ($i <= $n * $n) {
    if ($direction == 0) {
        for ($j = $left; $j <= $ritht; $j++) {
            $matrix[$top][$j] = $i++;
        }
        $top++;
    } elseif ($direction == 1) {
        for ($j = $top; $j <= $bottom; $j++) {
            $matrix[$j][$ritht] = $i++;
        }
        $ritht--;
    } elseif ($direction == 2) {
        for ($j = $ritht; $j >= $left; $j--) {
            $matrix[$bottom][$j] = $i++;
        }
        $bottom--;
    } else {
        for ($j = $bottom; $j >= $top; $j--) {
            $matrix[$j][$left] = $i++;
        }
        $left++;
    }
    $direction = ($direction + 1) % 4;
}
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $matrix[$i][$j];
    }

    echo "<br/>";
}

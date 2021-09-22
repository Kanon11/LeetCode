<?php
$arrives = array(1, 3, 4);
$departures = array(12, 8, 6);
echo hotel($arrives, $departures, 2);

function hotel($a, $b, $c)
{
    $n = count($a);
    $m = count($b);
    $i = 0;
    $j = 0;
    $count = 0;
    sort($a);
    sort($b);
    while ($i < $n && $j < $m) {
        if ($a[$i] < $b[$j]) {
            $count++;
            if ($count > $c) {
                return 0;
            }
            $i += 1;
        } else {
            $count -= 1;
            $j += 1;
        }
    }
    return 1;
}

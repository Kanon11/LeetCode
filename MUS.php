<?php

class solution
{

    function mus($a)
    {
        $start = 0;
        $end = count($a);
        $n = $end;
        for ($i = 1; $i < $n; $i++) {
            if ($a[$i] < $a[$i - 1]) {
                $start = $i - 1;
                break;
            }
        }
        for ($i = $n - 1; $i > 0; $i--) {
            if ($a[$i] < $a[$i - 1]) {
                $end = $i;
                break;
            }
        }
        if (($end - $start) == $n) {
            return -1;
        } else {
            $f = -10;
            for ($i = $end; $i < $n; $i++) { //last
                for ($j = 0; $j < $start; $j++) { //first
                    if ($a[$j] > $a[$i]) {
                        $nstart = $j;
                        $f = 0;
                        break;
                    }
                }
                if ($f == 0) {
                    break;
                }
            }
            $x = -1;
            for ($i = 0; $i <= $start; $i++) { // first
                for ($j = $n - 1; $j >= $end; $j--) { // last
                    if ($a[$i] > $a[$j]) {
                        $nend = $j;
                        $x = 0;
                        break;
                    }
                }
                if ($x == 0) {
                    break;
                }
            }
            // while ($start >= 0 && $end <= $n - 1) {
            //     if ($a[$start]>$a[$end]) {

            //     }
            // }
            return [$nstart, $nend];
        }
    }
}
$obj = new solution();
// $a = [5, 6, 1, 2, 4, 7];
$a = [3, 2, 1];
echo "<pre>";
print_r($obj->mus($a));
echo "</pre>";

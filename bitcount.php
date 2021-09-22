<?php
$a = 10;
$b = 20;
$bib = into_to_bin($b);
$bia = into_to_bin($a);
$alenth = strlen($bia);
$blenth = strlen($bib);
$count = ($alenth > $blenth) ? $alenth - $blenth : $blenth - $alenth;
$c = $count;
if ($alenth > $blenth) {
    for ($i = 0 + $c; $i <= $blenth; $i++) {
        if ($bib[$i - $c] != $bia[$i]) {
            $count += 1;
        }
    }
} else {
    for ($i = 0 + $c; $i <= $alenth; $i++) {
        if ($bia[$i - $c] != $bib[$i]) {
            $count += 1;
        }
    }
}

echo $count;
function into_to_bin($n)
{
    $output = "";
    while ($n > 0) {
        $temp = (int) ($n % 2);
        $n = (int) ($n / 2);
        $output .= $temp;
    }
    return strrev($output);
}

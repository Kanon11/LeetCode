<?php
$a = array(5, 4, 3, 2);
echo maximumGap($a);

function maximumGap($a)
{
    if (count($a) == 0) {
        return -1;
    } elseif (count($a) == 1) {
        return 0;
    }
    $newArray = array();
    foreach ($a as $key => $value) {
        $newArray[] = array($value, $key);
    }
    sort($newArray);
    $maxdistance = 0;
    $min_num = $newArray[0][1];
    for ($i = 0; $i < count($newArray); $i++) {
        $num = $newArray[$i][1];
        if ($num <= $min_num) {
            $min_num = $num;
        }
        $maxdistance = max($maxdistance, $num - $min_num);
    }
    return $maxdistance;
}

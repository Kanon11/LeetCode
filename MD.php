<?php
class solution
{
    // function maximumGap($a) //O(n^2)
    // {
    //     $n = count($a);
    //     if ($n == 1) {
    //         return 0;
    //     }
    //     $maxji = 0;
    //     for ($i = 0; $i < $n; $i++) {
    //         for ($j = $i + 1; $j < $n; $j++) {
    //             if ($a[$i] <= $a[$j]) {
    //                 $temp = $j - $i;
    //                 if ($temp > $maxji) {
    //                     $maxji = $temp;
    //                 }
    //             }
    //         }
    //     }
    //     return $maxji;
    // }
    function maximumGap($a) // O(Nlogn)
    {
        $aa = [];
        foreach ($a as $key => $value) {
            $x = [$value, $key];
            $aa[] = $x;
        }
        sort($aa);
        $md = PHP_INT_MIN;
        for ($i = 1; $i < count($aa); $i++) {
            $temp = $aa[$i][1] - $aa[$i - 1][1];
            if ($temp > $md) {
                $md = $temp;
            }
        }
        return $md;
    }
}

$obj = new solution();
$a = [1, 10, 30, 20];
echo "<pre>";
print_r($obj->maximumGap($a));
echo "</pre>";

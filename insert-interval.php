<?php
class Solution
{
    public function insert($intervals, $newInterval)
    {
        $start = 0;
        $end = 0;
        $n = count($intervals) - 1;
        while ($end <= $n) {
            if ($newInterval[0] <= $intervals[$end][1]) {
                if ($newInterval[1] < $intervals[$end][0]) {
                    break;
                }

                $newInterval[0] = min($newInterval[0], $intervals[$end][0]);
                $newInterval[1] = max($newInterval[1], $intervals[$end][1]);
            } else {
                $start += 1;
            }

            $end += 1;

        }
        $zz = array_merge(array_slice($intervals, 0, $start), [$newInterval], array_slice($intervals, $end));
        return $zz;

    }
}

$obj = new Solution();
$intervals[] = [1, 2];
$intervals[] = [3, 5];
$intervals[] = [6, 7];
$intervals[] = [8, 10];
$intervals[] = [12, 16];
$newInterval = [4, 8];
echo "<pre>";
print_r($obj->insert($intervals, $newInterval));
echo "</pre>";

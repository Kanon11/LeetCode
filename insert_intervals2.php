<?php

class Solution
{

    /**
     * @param Integer[][] $intervals
     * @param Integer[] $newInterval
     * @return Integer[][]
     */
    public function insert($intervals, $newInterval)
    {

        $start = 0;
        $end = 0;
        $n = count($intervals);

        while ($end < $n) {
            if ($newInterval[0] <= $intervals[$end][1]) {
                if ($newInterval[1] < $intervals[$end][0]) {
                    break;
                }
                $newInterval[0] = min($newInterval[0], $intervals[$end][0]);
                $newInterval[1] = max($newInterval[1], $intervals[$end][1]);
            } else {
                $start++;
            }
            $end++;
        }

        return array_merge(array_slice($intervals, 0, $start), array($newInterval), array_slice($intervals, $end));

    }
}

$obj = new Solution();
$intervals = [[1, 5]];
$newInterval = [2, 3];
echo "<pre>";
print_r($obj->insert($intervals, $newInterval));
echo "</pre>";

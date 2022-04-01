
<?php

class Solution
{


    function compress(&$chars)
    {
        $l = count($chars);
        $k = 0;
        for ($i = 0; $i < $l; $i++) {

            if ($i + 1 < $l && $chars[$i] == $chars[$i + 1]) {
                $x = $chars[$i];
                $cnt = 1;
                while ($i+1 < $l && $chars[$i] == $chars[$i + 1]) {
                    $i++;
                    $cnt++;
                }
            } else {
                $x = $chars[$i];
                $cnt = 1;
            }
            $chars[$k++] = $x;
            if ($cnt>1){
                $op = $cnt;
                $a_array=[];
                while ($op > 0) {
                    $ans = (int)($op % 10);
                    $a_array[] = (string)$ans;
                    $op = (int)($op / 10);
                }
                for ($z = count($a_array) - 1; $z >= 0; $z--) {
                    $chars[$k++] = (string)$a_array[$z];
                }
            }
        }

            return $k;
    }
}
$obj = new Solution();
$c = ["a", "a", "a", "a", "a", "a", "b", "b", "b", "b", "b", "b", "b", "b", "b", "b", "b", "b", "b", "b", "b", "b", "b", "b", "b", "b", "b", "c", "c", "c", "c", "c", "c", "c", "c", "c", "c", "c", "c", "c", "c"];
echo "<pre>";
print_r($obj->compress($c));
$obj->compress($c);
print_r($c);
echo "</pre>";

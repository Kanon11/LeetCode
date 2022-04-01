
<?php
class Solution
{
    function merge(&$la, &$ra, &$nums,&$ans)
    {
        $i = $j = $k = $f =  0;
        $nla = count($la);
        $nra = count($ra);
        while ($i < $nla && $j < $nra) {
            if ($la[$i] <= $ra[$j]) {
                $nums[$k] = $la[$i];
            $ans[$la[$i]]+=$f;
                $i++;
                $k++;
               
            } else {
                $nums[$k] = $ra[$j];
                $j++;
                $k++;
                $f++;


            }
 
        }

        while ($i < $nla) {
            $ans[] += $f;
            $nums[$k++] = $la[$i++];


        }
        while ($j < $nra) {
            $nums[$k++] = $ra[$j++];
        }
    }
    function mergeShort(&$nums,&$ans)
    {
        $l = count($nums);
        if ($l < 2) return;
        $mid = (int)($l / 2);
        $la = [];
        $ra = [];
        for ($i = 0; $i < $mid; $i++) {
            $la[$i] = $nums[$i];
        }
        for ($i = $mid; $i < $l; $i++) {
            $ra[$i - $mid] = $nums[$i];
        }
        $this->mergeShort($la,$ans);
        $this->mergeShort($ra,$ans);
        $this->merge($la, $ra, $nums,$ans);
    }
    function sortArray($nums)
    {
        $ans=[];
        $this->mergeShort($nums,$ans);
        return $ans;
    }
}
$obj = new Solution();
$cost = [5, 2, 6, 1];
// $cost = [-1,-1];
echo "<pre>";
print_r($obj->sortArray($cost));
echo "</pre>";

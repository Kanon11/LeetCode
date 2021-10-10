<?php
class Solution
{

    /**
     * @param Integer $x
     * @return Integer
     */
    function mySqrt($x)
    {
        $l=0;
        $h=$x;
        while($l<=$h){
            $mid=(int)(($l+$h)/2);
            $ans= $mid * $mid;
            if($ans==$x){
                return $mid;
            }
            else if($ans>$x){
                $h=$mid-1;
            }
            else {
                $l=$mid+1;
            }

        }
        return $h;
    }
}
$obj = new Solution();
$n=8;
echo "<pre>";
print_r($obj->mySqrt($n));
echo "</pre>";
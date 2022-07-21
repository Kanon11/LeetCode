<?php
class Solution
{
    function isIsomorphic($s, $t)
    {
        $store=[];

        for ($i=0; $i <strlen($s) ; $i++) { 
           if (array_key_exists($s[$i],$store)) {
            if($store[$s[$i]]!=$t[$i]){
                return false;
            }
           }
           elseif (in_array($t[$i],$store)) {
                return false;
           }
           else{
                $store[$s[$i]]=$t[$i];
           }
        }
        return true;
    }
}

$obj=new Solution();

$s="badc";
$t="baba";
var_dump($obj->isIsomorphic($s,$t));

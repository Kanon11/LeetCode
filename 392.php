<?php



class Solution {

/**
* @param String $s
* @param String $t
* @return Boolean
*/
function isSubsequence($s, $t) {
    $i=0;
    $j=0;
    $s_len=strlen($s);
    $t_len=strlen($t);
    while($j<$t_len){
        if($s[$i]==$t[$j]){
            $i++;
            $j++;
        }
        else{
            $j++;
        }
    }
    return $i==$s_len?true:false;

}

}

$obj=new Solution();
$s="acee";
$t="abcde";
echo $obj->isSubsequence($s,$t);

<?php
class Solution
{

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function pstrStr($haystack, $needle)
    {
        $m=strlen($needle);
        $n=strlen($haystack);
        $lsp=array_fill(0,$m,0);
        $this->lsp($needle,$lsp,$m);
        $i=0;$j=0;
        while($i<$n){
            if ($haystack[$i]==$needle[$j]) {
                $i++;
                $j++;
            }
            else {
                if($j!=0){
                    $j = $lsp[$j - 1];
                }
                else {
                    $i++;
                }

            }
            if($j==$m){
                return $i-$j;
                $j=$lsp[$j-1];
            }
        }
        return -1;
        
    }
    function lsp($needle,&$lsp,$m){
        $lsp[0]=0;
        $i=1;
        $len=0;
        while($i<$m){
            if($needle[$i]==$needle[$len]){

                $lsp[$i]=$len+1;
                $len++;
                $i++;

            }
            else {
                if ($len!=0) {
                   $len=$lsp[$len-1];
                } else {
                    $lsp[$i] = 0;
                    $i++;
                }
                

            }
        }
    }
}
$obj=new Solution();

echo $obj->pstrStr("aabaaabaaac", "aabaa");
<?php
class Solution
{
    function maxDepth($s)
    {
        $max = 0;
        $top = 0;
        $stack=[];
        for ($i=0;$i<strlen($s);$i++) {
            if ($s[$i] == '(') {
                $stack[$top]='(';
                ++$top;
                if($top>$max)
                $max=$top;
            }
            else if($s[$i]==')'){
                if($top==0){
                    return $max;
                }
                --$top;
                $lastitem=$stack[$top];
                if($lastitem!='('){
                    return $max;
                }
            }
        }
    return $max;
    }
}
$obj = new Solution();
$a = "(1)+((2))+(((3)))";
print_r($obj->maxDepth($a));

<?php

class Solution
{

    function scoreOfParentheses($s)
    {
        $len = strlen($s);
        // return $s; 
        //(11)(((1)))1
        $ans=[];
        $cnt=0;
        $w=0;
        for ($i=0; $i < $len; $i++) { 
            $cnt=0;
            if($s[$i]=='('){
                array_push($ans, 0);
            }
            if($s[$i]==')')
            {
               while($ans[array_key_last($ans)]!=0){
                   $cnt+=array_pop($ans);
               }
               array_pop($ans);
               $temp=max(2*$cnt,1);
              array_push($ans,$temp);
            }
        }
        return array_sum($ans) ;
    }
}
$obj = new Solution();
$s = "(()())((()))()"; // "a(b(c)d)" ((())
echo "<pre>";
print_r($obj->scoreOfParentheses($s));
echo "</pre>";
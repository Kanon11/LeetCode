<?php
class Solution
{
    function minRemoveToMakeValid($s)
    {
        $len=strlen($s);
        $parenthesis=[];
        for ($i=0; $i <$len ; $i++) { 

            if($s[$i]=='('){
                array_push($parenthesis,$i);
            }
            else if($s[$i] == ')'){
                if(count($parenthesis)>0){
                    array_pop($parenthesis);
                }
                else {
                    $s[$i]='#';
                }
            }
        }
        for ($i=0; $i <count($parenthesis) ; $i++) { 
            $s[$parenthesis[$i]]='#';
        }
        return $s;
        // return str_replace('#','',$s);
    }
}
$obj=new Solution();
$s= "))(()"; // "a(b(c)d)" ((())
echo "<pre>";
print_r($obj->minRemoveToMakeValid($s));
echo"</pre>";
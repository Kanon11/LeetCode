
<?php
//kc
class Solution
{

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s)
    {
        $len = strlen($s);
        $ans=[];
        for ($i = 0; $i < $len; $i++) {
            if ($s[$i] == '('|| $s[$i] == '{'|| $s[$i] == '[') {
                array_push($ans,$s[$i]);
            } else if ($s[$i] == ')' && $ans[array_key_last($ans)]=='(') {
                array_pop($ans);
            }
              else if ($s[$i] == '}'&& $ans[array_key_last($ans)] == '{') {
                array_pop($ans);
            }
             else if ($s[$i] == ']'&& $ans[array_key_last($ans)] == '[') {
                array_pop($ans);
            }
            else {
                return false;
            }
        }
        return  count($ans)>0?false:true;
    }
}
$obj=new Solution();
echo $obj->isValid("()[]");

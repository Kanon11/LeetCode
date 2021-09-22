<?php
class Solution
{

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs)
    {
        $array_count = count($strs);
        if ($array_count == 0) {
            return "";
        }
        $temp_str = $strs[0];
        $prefix = "";
        for ($i = 0; $i < strlen($temp_str); $i++) {
            for ($j = 1; $j < count($strs); $j++) {
                $str_now = $strs[$j];
                if (strlen($str_now) == 0) {
                    return "";
                } else {
                    if ($temp_str[$i] == $str_now[$i]) {
                        continue;
                    } else {
                        return $prefix;
                    }
                }
            }
            $prefix .= $temp_str[$i];
        }
        return $prefix;
    }
}
$strs = array("flower", "fxow", "flight");
$obj = new Solution();
echo $obj->longestCommonPrefix($strs);

<?php
$str = "kanon";

echo Is_Unique($str);

function Is_Unique($str)
{
    $my_array = array_fill(0, 255, 0);
    for ($i = 0; $i < strlen($str); $i++) {
        $x =  ord($str[$i]);
        if ($my_array[$x] == 1) {
            return 1;
        }
        $my_array[$x] = 1;
    }
    return 0;
}

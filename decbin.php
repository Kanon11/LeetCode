<?php
$n = 439;
$s = decbin($n);
$z = strlen($s);
$max = 0;
$regular = 0;
for ($i = 0; $i < $z;) {
    if ($s[$i] == '1') {
        $regular = 0;
        while ($s[$i] == '1') {
            $i++;
            $regular++;
            if ($i >= $z) {
                break;
            }
        }
        if ($regular > $max) {
            $max = $regular;
            $regular = 0;
        }
    } else {
        $i++;
    }
}
echo $max;

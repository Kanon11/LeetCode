<?php
date_default_timezone_set("Asia/Dhaka");
// $first=date("Y-m-d H:i:s");
$first="2022-10-12 09:28:37";
$last= date('Y-m-d H:i:s', strtotime("+5 min"));

if(strtotime($first)<strtotime($last)){
    echo "yesl";
}
else{
    echo "no";
}

echo $first;
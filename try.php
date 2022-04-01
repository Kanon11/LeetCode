<?php
function check($num)
{
   if ($num>5) {
      throw new Exception("value must be below or equal 5");
   }
   return true;
}
try{
    check(1);
    echo "if you see this value is below 5";

}
catch(Exception $e){
    echo $e;
}
<?php

class Solution{
    function fizzBuzz($n)
    {
        $ans=[];
        for ($i=1; $i <=$n ; $i++) { 
            $temp=(int)$i%3;
            $temp_f=(int)$i%5;
            if($temp==0 && $temp_f==0){
                $ans[]= "FizzBuzz";
            }
            elseif ($temp==0) {
                $ans[] = "Fizz";
            } elseif ($temp_f == 0) {
                $ans[] = "Buzz";
            }
            else{
                $ans[]="$i";
            }
        }
        return $ans;
    }
}

$obj=new Solution();

echo "<pre>";

print_r($obj->fizzBuzz(15));

echo "</pre>";
    


<?php
//: Given an array of numbers, sort them in ascending order using sort(). 
// Try both even and odd numbers in the array.

$arr_one =[1,2,3,4,5,6,7,8,9,0,10,11,12,13,15,14,16,17,18];
function  checker  ($arr_one){
    $even_num =[];
    $odd_num=[];
   
    foreach($arr_one as $val){
        if($val%2===0){
            $even_num[]=$val;

        }else $odd_num[]=$val;
    }

    
 sort($even_num)   ;
 sort($odd_num);

    return [
        "Even Number ------->"=>$even_num,
        "Odd Number -------->"=>$odd_num
    ];
}

$resukt=  checker  ($arr_one);
echo "<pre>";
print_r ($resukt);
echo "</pre>";
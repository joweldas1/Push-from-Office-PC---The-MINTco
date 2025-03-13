<?php
//1. Sum of Two Numbers
function addNumbers ($a,$b){
    return $a + $b;
};
echo addNumbers(5,5);


//2. Check Even or Odd

function isEven ($c){
if($c%2===0){
    return "Added number is  even";
}else return "Added number is not even";
}
echo "<br>".isEven(50)."<br>";


//3. Find Factorial of a Number (Using Recursion)
function factorial ($n){
    if($n<1){
        return 1;
    }
    return $n *factorial($n-1);
}

echo factorial(5);


//5. Find Maximum Value in an Array


function isMax($a){
    $store = max($a);
    return $store;
}
$fMax=([3, 7, 2, 9, 5]);

echo "<br>".isMax($fMax);


$str = "Hello world";
function checkVowel($str){
$sts=strtolower($str);
$vowels = ['a','e','i','o','u'];
$count=0;
for($i=0;$i<strlen($str);$i++){
    if(in_array($str[$i],$vowels)){
        $count++;
    }
}
return $count;
}

echo "<br>".checkVowel($str);
?>
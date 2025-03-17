<?php
//Array updation


//Replace an Element
$colors = ["Red", "Green", "Blue", "Yellow"];
echo "<br> $colors[0]<br>"; //result -----> red
$colors[0]="Purple";
var_dump($colors);
echo "<br> $colors[0]<br>";   // result ------> purple




// Add an Element at a Specific Index
$fruits = ["Apple", "Banana", "Mango", "Grapes"];
var_dump($fruits);
echo "<br>";
$fruits[4]="Orange";
var_dump($fruits);
echo "<br>";




//Remove "Mango" from the array above and reindex it.
/**
 * --> Array theke elements remove korar jonno  array_splice function use kora hoy
 * --> array_splice($array_varibale_name, index of removed elements, index of how many elements will remove);
 * --> current array theke removce hoy , noutn array creat hoy na;
 */
$new_fruits = array_splice($fruits,2,1);
echo "<br>";
echo "<br>";
echo "<br>";

var_dump($new_fruits);
echo "<br>";
var_dump($fruits);

//Task 1: Create an indexed array
$arr_1 =array("kallu","allu","sallu");

//Task 2: Create an associative array
$arr_2 = array("helll"=>"who","gell"=>"yes","are"=>"you",);

//Task 3: Create a multidimensional array
$arr_3 =array(array("name"=>"jowel","age"=>30),array("name"=>"ashreaf","age"=>35));


//Task 1: Create a range of numbers
$arr_4 = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);
$result_arr_4 = range(1, 10);
echo "<br>";
var_dump($result_arr_4);
echo "<br>";
foreach( $result_arr_4 as $counters){
    echo "<br> $counters";
}

//Task 2: Create an array of even numbers
//Task 2: Create an array of even numbers
//find out even from an array
echo "<br>break<br>";

$arr_5=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
$store = [];
foreach($arr_5 as $val){
    if($val%2===0){
        $store[]=$val;
    }
}
var_dump($store);

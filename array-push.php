<?php
//🔹 Problem 1: খালি অ্যারেতে নতুন মান যোগ করো

$arr_one = [];
array_push($arr_one,1,2);
print_r($arr_one);
echo "<br>";

//🔹 Problem 2: ইউজার ইনপুট গ্রহণ করে অ্যারে বানাও


function make_arr_two($a){
    $arr =[];
    array_push($arr,$a);
    return $arr;
}
print_r(make_arr_two([10,20,30])) ;



//range(1, 50) ব্যবহার করে ১ থেকে ৫০ পর্যন্ত সংখ্যা বের করো।
//শুধুমাত্র ৩ দিয়ে বিভাজ্য সংখ্যাগুলো array_push() দিয়ে নতুন অ্যারেতে যোগ করো।
//নতুন অ্যারেটি প্রিন্ট করো।

$arr_five = range(1,50,1);
$storage =[];
foreach($arr_five as $val){
    if($val%3===0){
        array_push($storage,$val);
    }
}
echo "<br>";
print_r($arr_five);
echo "<br> Line -----> 34<br>";
print_r($storage);
echo "<br>";


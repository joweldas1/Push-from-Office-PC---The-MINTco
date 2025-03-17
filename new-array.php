<?php
//Create an associative array named $student with keys: name, age, subject,
//  and grade. Assign appropriate values and print the array in a readable format.

$student = array(
    "name"=>"jowel",
    "subject"=>"English",
    "marks"=>50
);
print_r($student); echo "<br>";
echo var_dump($student);


//Write a function generateEvenNumbers($start, $end) that returns an array of even numbers between $start and $end (inclusive).
//  Use range() to achieve this.
function generateEvenNumbers($start,$end){
    return range($start, $end,2);
}
$x = generateEvenNumbers(1,10);
echo "<br>";
var_dump($x);

// 🔹 Problem 1: ১ থেকে ১০ পর্যন্ত সংখ্যার যোগফল বের করো
function calculate ($a,$b){
    $equal = 0;
    $c = range($a, $b,1);
    foreach($c as $val){
        $equal+=$val;
    }
    return $equal;
}
echo "<br>";
echo calculate(1,5);
echo "<br>";


//🔹 Problem 2: ১ থেকে ৫০ পর্যন্ত সব জোড় সংখ্যা প্রিন্ট করো

$y = generateEvenNumbers(1,50);
var_dump($y);
echo "<br>";


//range('Z', 'A', -1) ব্যবহার করে বড় হাতের (uppercase) অক্ষরগুলো Z থেকে A পর্যন্ত প্রিন্ট করো।
function print_letter ($a,$b){
    $x = range($a, $b,-1);
    return $x;
}
$z = print_letter("Z","A");
print_r($z);
echo "<br>";

//🔹 Problem 4: মাল্টিপ্লিকেশন টেবিল (গুণনীয় ফল) তৈরি করো
function multiplication($a){
    foreach(range(1,10) as $num){
        echo "$a * $num = ".$a*$num."<br>";
    }
}
multiplication(5);
echo "<br>";
multiplication(50);

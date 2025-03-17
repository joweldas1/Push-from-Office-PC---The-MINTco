<?php


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


//🔹 Problem 1: ১ থেকে ১০০ পর্যন্ত বিজোড় সংখ্যা প্রিন্ট করো
function find_odd_number($a){
    $count=0;
        foreach(range(1,$a,2)as $val){
            echo "<br>".$val."<br>";
            $count++;
        }
        echo "<br> Total odd number count --> $count <br> ";
        }
  
find_odd_number(12);


//🔹 Problem 2: ২ থেকে ২০ পর্যন্ত সংখ্যার বর্গফল (square) বের করো

function know_square ($a){
    foreach(range(0, $a,2)as $val){
        echo pow($val,2)."<br>";
    }

}

know_square(50);

//🔹 Problem 3: ১০ থেকে ১ পর্যন্ত উল্টোভাবে সংখ্যা প্রিন্ট করো

function make_it_ulta ($a,$b){
    foreach(range($a, $b,-1) as $val){
        echo "<br>".$val."<br>"; 
    }
}

make_it_ulta(30,20);

//🔹 Problem 4: ছোট হাতের a-z অক্ষর প্রিন্ট করো
function print_small_letter(){
    $count =0;
    foreach(range("a","z",1) as $val){
        echo "<br>".$val."<br>";
        $count++; 

    }
    echo "<br> $count <br>";
}
print_small_letter();


//🔹 Problem 5: ৭-এর মাল্টিপ্লিকেশন টেবিল তৈরি করো (১-১৫ পর্যন্ত)
function seven_number_multiplication(){
    foreach(range(1,15,1)as $val){
        echo "7 * $val = ".($val*7)."<br>";
    }
}
seven_number_multiplication();

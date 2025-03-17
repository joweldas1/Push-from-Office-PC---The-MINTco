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

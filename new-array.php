<?php
//Create an associative array named $student with keys: name, age, subject,
//  and grade. Assign appropriate values and print the array in a readable format.

$student = array(
    "name"=>"jowel",
    "subject"=>"English",
    "marks"=>50
);
echo "<pre";
print_r($student);
echo "<pre>";
echo var_dump($student);
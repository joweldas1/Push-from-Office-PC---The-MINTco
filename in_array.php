<?php

//🔹 Problem 1: প্রোডাক্ট লিস্টে চেক করে কিছু খুঁজো
$products = ["Laptop", "Mobile", "Tablet", "Headphones"];
function search_func ($a,$products){
    if(in_array($a,$products)){
        return "Found";
    } else return "Nothing found";
}
echo search_func("Laptop",$products )."<br>";


//🔹 Problem 2: অ্যাসোসিয়েটিভ অ্যারেতে কনফিগারেশন চেক করো
function key_checker($a,$b){
    return array_key_exists($a,$b) ;
}
echo key_checker("port",["host" => "localhost", "port" => 3306, "user" => "root"])."<br>";



//🔹 Problem 3: নির্দিষ্ট রঙের ইনডেক্স বের করো
$colors = ["Red", "Green", "Blue", "Yellow"];
$a =  "Blue eyes";
function color_index($a,$colors){
    $a =array_search($a,$colors); 
    if($a){
        return $a; 
    }else return "Search has issue , index not found";
}
echo color_index($a,$colors)."<br>";


//🔹 Problem 4: গ্রাহকের নাম চেক করো

$customers = ["John", "Jane", "Mark", "Sarah"];
$xx = "Jane";

function check_cus_name($a, $customers) {
    $y = array_search($a, $customers); // Get the index
    if ($y !== false) { // Check if the name is found
        return "$a found at index $y";
    } else {
        return "Name not found";
    }
}

echo check_cus_name($xx, $customers) . "<br>";


//🔹 Problem 5: সিস্টেম কনফিগে পাসওয়ার্ড কী চেক করো

$system_config = ["admin" => "root", "user" => "password"];
function check_admin_exists($a,$system_config){
    if(array_key_exists($a,$system_config)){
        return "$a is existings";
    }return "$x not found";
}
echo check_admin_exists("admin",$system_config)."<br>";



//🔹 Problem 6: ডিপার্টমেন্টের নাম খুঁজো
$departments = ["HR", "Finance", "IT", "Marketing"];

function find_deparment_name ($a,$departments){
    if(in_array($a,$departments)){
        return "$a is found";
    } return "Not found";
}
echo find_deparment_name("HR",$departments)."<br>";



//🔹 Problem 7: মেহমানের উপস্থিতি চেক করো
$guests = ["Ali", "Sara", "Tariq", "Nina","hel"];
function check_guest($a,$guests){
    if(in_array($a ,$guests)){
       $count_num = count($guests);
        return "$a is present here and total guest present $count_num";
    }
}
echo check_guest("Tariq",$guests)."<br>";
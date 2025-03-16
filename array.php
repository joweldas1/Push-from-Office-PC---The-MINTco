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


<?php
//1. Print Numbers (For Loop)
for ($i=1;$i<=10;$i++){
    echo $i."<br>";
};
//2. Even Numbers (While Loop)
$x = 1;
while($x<=20){
    if($x%2===0){
        echo $x."<br>";
    }
    $x++;
}
//3. Reverse Countdown (Do-While Loop)
$y=20;
do{
    echo $y."<br>";
    $y--;
}while($y>=1);

//4. Sum of First 10 Natural Numbers
$z = 20;
for ( $k=1; $k<=10; $k++){
    // $z = $z+$k;
    $z += $k;
}
echo "Sum of frist 10 number is : $z"."<br>";

//5. Multiplication Table
$F = 5;

for($l=1 ; $l<=10 ; $l++){
    echo "$F * $l = ".$F*$l."<br>";
}
//6. Factorial Calculation
$factorial = 5;
$result = 1;
for($factorialMultiply = 1 ; $factorialMultiply<=$factorial ; $factorialMultiply++){
    $result *=$factorialMultiply;
}
echo " $factorial number factorial is = $result <br>" ;

//7. Reverse a String (For Loop)
//Write a PHP script that takes a string (e.g., "Hello") and prints its reverse using a for loop.

$h = "hello";
$reversed = "";

for($xx = strlen($h)-1 ; $xx>=0; $xx--  ){
    $reversed .= $h[$xx];
    echo $reversed;
}
echo "Orginal word $h and reversed is $reversed <br>    ";

function counti(&$value){
    $value +=5;
}
$counter = 5;
echo "actual value of $counter <br>";
counti($counter);
echo "actual value of $counter <br>";


ffunction sumOf(...$value) {
    $store = 0;
    $len = count($value);
    for ($i = 0; $i < $len; $i++) { // Use $i, not $I
        $store += $value[$i]; // Corrected array reference
    }
    return $store;
}

$b = sumOf(10, 20, 30);
echo $b; // Output: 60
?>
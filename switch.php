<?php
//🔹 Task 1: Print Numbers using for Loop

for($x=1;$x<=10;$x++){
    echo "Value of X = ".$x."<br>";
}

//🔹 Task 2: Sum of Even Numbers using while Loop
$y = 1 ;
$z=0;
while ($y<=20)
{

    if( $y%2===0){
        $z=$z+$y;
        echo "Sum of  " .$z."<br>";   
    }
   
    
 
    $y++;

}

//🔹 Task 3: Reverse Countdown using do-while Loop

$a=10;
do{
    echo $a."<br>";
    $a--;
}while($a>=1);



//🔹 Task 4: Print Multiplication Table using for Loop
$f = 5;

for($i=1;$i<=10;$i++){
    echo $f*$i."<br>";
}

// Task 5: Factorial Calculation using while Loop
$xx = 5;
$factorial = 1;
$ii = $xx;

while($ii>0){
    $factorial = $factorial *$ii;
    $ii--;
}
echo "number of $xx factrial is : $factorial";
//🔹 Task 6: Count Vowels in a String using foreach
$sentence = "Hello World";
$vowel = ["a","e","i","o","u"];
$counter = 0;
$chars = str_split($sentence);


foreach($chars as $char){
    if(in_array($char,$vowel)){
        $counter++;
    }
}

echo "Vowels count : $counter";



$numbers = [10,20,30,40,50];
$max = $numbers[0];
foreach($numbers as $num){

    if($num>$max){
        $max = $num;
    }
}

echo "max number : $max"
?>
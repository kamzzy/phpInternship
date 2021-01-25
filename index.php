<!-- Question 1

Given an array A = [10,20,30,40,50,60,70,80,90,100]
Write a function that receives two integers as parameters. 
the function returns the sum of elements in the array found between those two integers.
For Example, if we use 20 and 50 as parameters, the function should return 140.

A few additional requirements:

a) the two integers passed to the function should be positive; if not, the function should return -1.

b) validate that the first integer is lower than the second integer. if not, the function should return 0

c) if the first integer is in array, and the second is above 100, 
for example 80 and 130, then the function should return the sum of 
those integers that are within the array and in between the range given. in this case, that would be 270.

d) if both integers are not found in the array, for example 110 and 120, the function should return 0. 


<?php


// $A = array(10,20,30,40,50,60,70,80,90,100);
// $num = range(20,50,10);
//  $b = array_sum($num);
 
// echo $b;

// echo "<br>";

function num ($b){
    return $b > 0;
}

$A = array(10,20,30,40,50,60,70,80,90,100);
 $c = array_filter($A, num);

$myrange = range(800,130, 10);
$output = array_intersect($c , $myrange );
echo array_sum($output);



?>
<?php

//Answer to Problem 1 starts here

function mySort($a,$b){
    if(strlen($a)==strlen($b))    return 0;
    return strlen($a)<strlen($b) ? -1 : 1;
}

function stringSorting($str){
    usort($str,"mySort");
    return $str;    
}
$str1 = array("Dog", "Elephant", "Mouse", "Cat", "Crocodile");
$output = stringSorting($str1);

echo("==STRING SORTING==\n");
//Output Printing
foreach ($output as $word){
    echo($word."\n");
}
echo("==================\n\n");


//Answer to Problem 2 starts here

function stringConcat(string $a, string $b){
    return $c = $a.$b;
}
// Using $str1 values to input strings 
echo("==String Concat of ".$str1[3]." & ".$str1[4]."==\n");
echo stringConcat($str1[3],$str1[4]);
echo("\n==================\n\n");


//Answer to Problem 3 starts here

function arraySlicing(array $a){
    array_pop($a);
    $a = array_slice($a,1);
    return $a;
}


$output_array = arraySlicing($str1);
//Output Print
echo("\n==Array Slicing==\n");
foreach ($output_array as $word){
    echo($word."\n");
}
echo("\n==================\n\n");


//Answer to Problem 4 starts here
function checkString(string $str){
    $str_temp = str_replace(' ','',$str);
    return ctype_alpha($str_temp);
}
$str2 = "Hi, My name is Rownok Alahi Islam";
echo("\n==String Check==\n");
if (checkString($str2)){
    echo("String only contains letter & spaces");
}
else{
    echo("String doesn't only contains letter & spaces");
}
echo("\n==================\n\n");

// Answer to the problem 5 starts here

function compare($a,$b){
    if($a==$b)
        return 0;
    return ($a<$b)? 1:-1;
}
function isSecondLargest(array $num){
    usort($num, "compare");
    return $num[1];
}
$numbers = array(10,4,6,1,9,25);
echo("Second Largest Number \n");
echo isSecondLargest($numbers);
echo("\n=====================\n");

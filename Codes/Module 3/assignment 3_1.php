<?php

function evenOrOdd2(int $n){
    if($n%2==0){
        return "Even";
    }
    else{
        return "Odd";
    }
}

function evenOrOdd(int $n){
    $_temp = ($n%2==0)? "Even": "Odd";
    return $_temp;
}

echo evenOrOdd(2);
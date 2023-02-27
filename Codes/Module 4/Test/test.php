<?php

function longestWord($str){
    $word_array = explode(' ', $str);
    $longest_word_length = 0;
    $longest_word = '';
    foreach($word_array as $w){
        if(strlen($w) > $longest_word_length){
            $longest_word_length = strlen($w);
            $longest_word = $w;
        }
        
    }
    return $longest_word;
}

$str = "The quick brown fox jumped over the lazy dog";
echo longestWord($str);
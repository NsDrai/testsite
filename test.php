<?php

use LDAP\Result;

function isArgumentsForSubstrCorrect($str, $index, $len){
    if ($index < 0) {
        $result = false;
    } elseif ($len < 0) {
        $result = false;
    } elseif ($index >= (strlen($str) - 1)){
        $result = false;
    } elseif (($index + $len) >= (strlen($str) - $index - 1)){
        $result = false;
    } else {
        $result = true;
    }
}

$str = 'Sansa Stark';
isArgumentsForSubstrCorrect($str, -1, 3);  
isArgumentsForSubstrCorrect($str, 4, 100); 
isArgumentsForSubstrCorrect($str, 10, 10); 
isArgumentsForSubstrCorrect($str, 11, 1);  
isArgumentsForSubstrCorrect($str, 3, 3);   
isArgumentsForSubstrCorrect($str, 0, 5);



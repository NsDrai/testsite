<?php

function invertCase($text) {



    $result = "";
    for ($i = 0; $i < strlen($text); $i += 1) {
        if (mb_substr($text, $i, 1) == mb_strtoupper(mb_substr($text, $i, 1))) {
            $result = $result . mb_strtolower(mb_substr($text, $i, 1));
        } elseif (mb_substr($text, $i, 1) == mb_strtolower(mb_substr($text, $i, 1))) {
            $result = $result . mb_strtoupper(mb_substr($text, $i, 1));
        } else {
            $result = $result . $text[$i];
        }
    }
    return $result;
}

$str = 'ПрИвЕт!';
$strn = 'HeLlO!';

echo invertCase($strn) . "\n";


function getCustomDate($timeStamp) {
    return date('d\/m\/Y', $timeStamp);
} 

echo getCustomDate(1532435204) . "\n"; // 24/07/2018
echo getCustomDate(532435204) . "\n";  // 15/11/1986
echo getCustomDate(5324352) . "\n";    // 03/03/1970


function isPalindrome($text) {
    for ($i = 0; $i <= ceil(mb_strlen($text)/2); $i += 1) {
        if (strlen($text) == 1) {
            return true;
        } elseif (mb_substr($text, $i, 1) == mb_substr($text, -($i + 1), 1)) {
            continue;
        } else {
            return false;
        }
    }
    return true;
}

echo isPalindrome('radar') . "\n"; // true
echo isPalindrome('maam') . "\n"; // true
echo isPalindrome('a') . "\n";     // true
echo isPalindrome('abs') . "\n";   // false
echo isPalindrome('шалаш') . "\n"; // true
echo ceil(15/2);
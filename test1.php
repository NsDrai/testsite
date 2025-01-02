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
<?php

// BEGIN (write your solution here)
function normalizeUrl($url){
    if (stristr($url , "https://")){
        return print_r($url . "\n");
    } elseif (stristr($url, "http://")){
        $redactUrl = substr($url, 7);
        return print_r("https://{$redactUrl} \n");
    } else {
        return print_r("https://{$url} \n");
    }
}
// END
normalizeUrl('google.com');        
normalizeUrl("http://ai.fi");
normalizeUrl('https://hexlet.io');




<?php

function concat($str1, $str2, $delimiter=' ') {
    
    return $str1 . $delimiter . $str2;
}

$message = concat("Hello", "there!");

echo $message;
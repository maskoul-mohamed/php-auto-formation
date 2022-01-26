<?php

$x= 10;
$y = 20;

if($x> $y) {
    $message = 'x is greater than y';
} elseif($y > $x){
    $message = 'y is greater than x';
} else {
    $message = 'x is equal to y';
}

echo $message;
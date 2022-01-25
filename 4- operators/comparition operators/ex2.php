<?php

$x = 20;
$y = 10;

var_dump($x != $y); // bool(true)

$x = 20;
$y = '20';
var_dump($x != $y); // bool(false)

$x = 20;
$y = 20;

var_dump($x >= $y); // bool(true)
var_dump($y >= $x); // bool(true)
<?php

$x = 20;
$y = 10;

// add, subtract, and multiplication operators demo
echo "add, subtract, and multiplication operators\n";
echo $x + $y . "\n";  // 30
echo $x - $y . "\n";  // 10
echo $x * $y . "\n";  // 200

// division operator demo
$z = $x / $y;
echo "division operator\n";
echo gettype($z)  . "\n"; //  integer

$z = $y / $x;
echo gettype($z)  . "\n"; // double

// modulus demo
echo "modulus demo\n";
$y = 15;
echo $x % $y . "\n"; // 5
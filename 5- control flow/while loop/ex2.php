<?php

$total = 0;
$number = 1;

while ($number <= 10) :
	$total += $number;
	$number++;
endwhile;

echo $total;
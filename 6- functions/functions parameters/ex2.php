<?php

$counter = 1;
function increase($value)
{
	$value+= 1;
	echo $value . "\n"; // 2
}

// increase the counter
increase($counter);

echo $counter . "\n"; // 1
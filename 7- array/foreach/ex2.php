<?php

$capitals = [
	'Japan' => 'Tokyo',
	'France' => 'Paris',
	'Germany' => 'Berlin',
	'United Kingdom' => 'London',
	'United States' => 'Washington D.C.'
];

foreach ($capitals as $country => $capital) {
	echo "The capital city of {$country} is $capital" . "\n";
}
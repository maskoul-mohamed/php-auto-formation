<?php

$eligible = true;
$has_credit = false;

$message = $eligible 
                ? ($has_credit
                                ? 'Can use the credit'
                                : 'Not enough credit')
                : 'Not eligible to buy';

echo $message;
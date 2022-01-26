<?php

// $result = condition ? value1 : value2;

$is_user_logged_in = false;

$title = $is_user_logged_in ? 'Logout' : 'Login';

echo $title;








// $is_user_logged_in = false;

// if ($is_user_logged_in) {
// 	$title = 'Logout';
// } else {
// 	$title = 'Login';
// }
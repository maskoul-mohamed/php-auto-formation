<?php

if (filter_has_var(INPUT_GET, 'id')) {
	// sanitize id
	$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
	// show the id
	var_dump($id);
} else {
	echo 'id is required.';
}

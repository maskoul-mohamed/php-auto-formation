<?php
    define("ONE_WEEK", 7 * 86400);

    $return_visitor = false;

    if(!isset($_COOKIE['return'])) {
        setcookie('return', '1', time() + ONE_WEEK);
    } else {
        $return_visitor = true;
    }

    echo $return_visitor ? 'Welcome back!' : 'Welcome to my website';
?>
<?php
    $is_authenticated = false;
    $message = '';

    switch($is_authenticated){
        case true:
            $message = 'Welcome!';
            break;
        case false:
            $message = 'Please Login';
            break;
        default:
            $message = 'Error!';
    }

    echo $message;
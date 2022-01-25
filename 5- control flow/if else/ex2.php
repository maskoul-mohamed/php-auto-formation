<?php
    $is_admin = true;
    $can_approve = true;

    if($is_admin) {
        echo 'Welcome, Admin!';
        if($can_approve) {
            echo 'Please approve the pending items';
        }
    }
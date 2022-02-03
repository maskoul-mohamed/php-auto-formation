<?php
    require_once __DIR__ . '/inc/header.php';

    $request_method = strtoupper($_SERVER['REQUEST_METHOD']);

    if($request_method === 'GET'){
        require_once __dir__ . '/inc/get.php';
    } elseif($request_method === 'POST'){
        require_once __dir__ . '/inc/post.php';
    }

    require_once __dir__ . '/inc/footer.php';
?>
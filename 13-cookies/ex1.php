<?php
    setcookie('my_cookies', "This is my cookie", time() + 3600);

    echo $_COOKIE['my_cookies'];
?>
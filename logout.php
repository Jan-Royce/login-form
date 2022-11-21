<?php
    session_start();

    unset($_SESSION['username']);
    echo !empty($_SESSION['username']) ? $_SESSION['username'] : 'no username';

    header("location: /login-form/login_form.php");
?>
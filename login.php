<?php
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    require getcwd() . '/db.php';
    
    //TODO decrypt password
    
    $sql = "SELECT * FROM users where username = '{$username}' and password = '{$password}'";
    $result = $conn->query($sql);

    if($result->num_rows == 1) {
        $_SESSION['error'] = "";
        $_SESSION['username'] = ucfirst($username);
        header("location: /login-form");
        //TODO create session
    } else {
        $_SESSION['error'] = "Incorrect username or password.";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
?>
<?php
    session_start();
    
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    
    require getcwd() . '/db.php';
    
    $sql = "SELECT * FROM users where username = '{$username}' and password = '{$password}'";
    $result = $conn->query($sql);

    if($result->num_rows == 1) {
        $_SESSION['error'] = "";
        $_SESSION['username'] = ucfirst($username);
        
        header("location: /login-form");
    } else {
        $_SESSION['error'] = "Incorrect username or password.";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
?>
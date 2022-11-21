<?php
    session_start();
    require getcwd() . '/db.php';
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $_SESSION['error'] = '';
    
    $usernameSql = "SELECT * FROM users where username = '{$username}'";
    $usernameResult = $conn->query($usernameSql);
    if($usernameResult->num_rows > 0) {
        $_SESSION['error'] .= " Username must be unique.";
    }
    
    $emailSql = "SELECT * FROM users where email = '{$email}'";
    $emailResult = $conn->query($emailSql);
    if($emailResult->num_rows > 0) {
        $_SESSION['error'] .= " Email must be unique.";
    }
    
    if(!empty($_SESSION['error'])) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
    
    $sql = "INSERT INTO users (username, email, password)
            VALUES ('$_POST[username]', '$_POST[email]', '$password')";
 
    if ($conn->query($sql) === FALSE) {
        echo "Something went wrong.";
    }
    
    $conn->close();
    
    header("location: /login-form/login_form.php");
?>
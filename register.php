<?php
    // TODO backend validations

    require getcwd() . '/db.php';
    
    //NOTE: username must be unique
    //TODO encrypt password
    
    $sql = "INSERT INTO users (username, email, password)
            VALUES ('$_POST[username]', '$_POST[email]', '$_POST[password]')";
 
    if ($conn->query($sql) === FALSE) {
        echo "Something went wrong.";
    }
    
    $conn->close();
    
    header("location: /login-form/login_form.php");
?>
<?php
    $servername = "127.0.0.1:3306";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "login-register";
    
    // Create connection
    $conn = new mysqli($servername, $dbuser, $dbpass, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>
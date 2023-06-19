<?php
    $servername = "localhost";
    $username_db = "root";
    $password_db = "";
    $database = "ecommerce";
    
    // Create connection 
    $conn = mysqli_connect($servername,$username_db,$password_db,$database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else{
        echo "\"$database\" Connected successfully";
    }
?>
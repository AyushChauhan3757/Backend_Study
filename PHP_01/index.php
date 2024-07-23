<?php
    
    // 1. Create a database connection
    $db = mysqli_connect("127.0.0.1", "mariadb", "mariadb", "mariadb", 3306);

    // Test if connection succeeded (recommended)
    if(mysqli_connect_errno()) {
        echo "Error";
    }
    else {
        echo "Connected";
    }
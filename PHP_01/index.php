<?php
    /**
    * This script demonstrates how to create a database connection using mysqli and PDO in PHP.
    */

    // 1. Create a database connection using mysqli
    $db = mysqli_connect("127.0.0.1", "mariadb", "mariadb", "mariadb", 3306);

    // Test if connection succeeded (recommended)
    if(mysqli_connect_errno()) {
        echo "Error";
    }
    else {
        echo "Connected";
    }

    // 2. Create a database connection using PDO
    $dsn = "mysql:host=127.0.0.1;dbname=mariadb";
    $dbusername = "mariadb";
    $dbpassword = "mariadb";

    try {
        $pdo = new PDO($dsn, $dbusername, $dbpassword);
        echo "Connected";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

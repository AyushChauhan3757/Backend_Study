<?php
    $dsn = "mysql:host=127.0.0.1;dbname=test";
    $dbusername = "mariadb";
    $dbpassword = "mariadb";

    try {
        $pdo = new PDO($dsn, $dbusername, $dbpassword);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $username = $_POST["username"];
        $password = $_POST["pwd"];
        $email = $_POST["email"];
        
        try {
            require_once "dbh.inc.php";

            $query = "UPDATE users SET username = :username, pwd = :pwd, email = :email WHERE id = :id;";

            $stmt = $pdo->prepare($query);

            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":pwd", $password);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":id", $id);
            
            $stmt->execute();

            $pdo = null;
            $stmt = null;

            header("Location: ../index.php");
            die();
        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }
    }
    else {
        header("Location: ../index.php");
        exit();
    }
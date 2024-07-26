<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userSearch = $_POST["usersearch"];
        
        try {
            require_once "dbh.inc.php";

            $query = "SELECT * FROM comments WHERE username = :usersearch;";

            $stmt = $pdo->prepare($query);

            $stmt->bindParam(":usersearch", $userSearch);
            
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $pdo = null;
            $stmt = null;
        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }
    }
    else {
        header("Location: ../index.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecting Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        section {
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h3 {
            color: #333;
        }

        div {
            margin-bottom: 20px;
            padding: 10px;
            background-color: #f9f9f9;
            border-radius: 5px;
        }

        h4 {
            color: #555;
            margin-bottom: 5px;
        }

        p {
            color: #777;
            margin-bottom: 5px;
        }

        p:last-child {
            margin-bottom: 0;
        }
    </style>
</head>
<body>
    <section>
        <h3>Search Results:</h3>

        <?php
            if(empty($result)) {
                echo "<div>";
                echo "<p>No results found.</p>";
                echo "</div>";
            }
            else {
                foreach ($result as $row) {
                    echo "<div>";
                    echo "<h4>" . htmlspecialchars($row["username"]) . "</h4>";
                    echo "<p>" . htmlspecialchars($row["comment_text"]) . "</p>";
                    echo "<p>" . htmlspecialchars($row["created_at"]) . "</p>";
                    echo "</div>";
                }
            }
        ?>
    </section>
</body>
</html>
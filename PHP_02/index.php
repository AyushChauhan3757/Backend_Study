<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        form {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box; /* Add this line */
        }

        button[name="signup"] {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[name="signup"]:hover {
            background-color: #45a049;
        }
    </style>
    <title>Insertion</title>
</head>
<body>
    <form action="includes/formhandler.inc.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="pwd" name="pwd" placeholder="Password" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Email" required><br><br>
        
        <button type="submit" name="signup">Sign Up</button>
    </form>
</body>
</html>
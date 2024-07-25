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

        button {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
    <title>Update and Delete</title>
</head>
<body>
    <form action="includes/update.inc.php" method="POST">
        <h2>Update</h2>
        <label for="id">ID:</label>
        <input type="text" id="id" name="id" placeholder="ID" required><br><br>
        
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Username" required><br><br>
        
        <label for="password">New Password:</label>
        <input type="password" id="pwd" name="pwd" placeholder="New Password" required><br><br>
        
        <label for="email">New Email:</label>
        <input type="email" id="email" name="email" placeholder="New Email" required><br><br>
        
        <button type="submit" name="update">Update</button>
    </form>

    <form action="includes/delete.inc.php" method="POST">
        <h2>Delete</h2>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="pwd" name="pwd" placeholder="Password" required><br><br>
        
        <button type="submit" name="delete">Delete</button>
    </form>
</body>
</html>
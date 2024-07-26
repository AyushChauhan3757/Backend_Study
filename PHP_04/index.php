<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecting Data</title>
    <style>
        .searchform {
            margin: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"] {
            padding: 5px;
            width: 200px;
        }

        button {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form class="searchform" action="includes/search.php" method="POST">
        <label for="search">Search For User: </label>
        <input type="text" name="usersearch" placeholder="Search ...">
        <button>Search</button>
    </form>
</body>
</html>

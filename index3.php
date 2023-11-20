<?php
session_start();
$_SESSION;
include("connection.php");
include("functions.php");
$user_data=check_login($con);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kweyah's Website</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('Buildings.jpg'); 
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            color: white;
        }

        header {
            background-color: #333;
            padding: 10px;
            text-align: right;
        }

        .logout-btn {
            background-color: #4CAF50;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <header>
        <button class="logout-btn" onclick="logout()"><a href="logout.php">Log Out</a></button>
    </header>

    <main>
        <h1>Welcome to My Website</h1>
        <p>This is Kweyah's index page</p>
    </main>

    <footer>
        &copy; 2023 My Website. All rights reserved.
    </footer>

    <script>
        function logout() {
            location.reload();
        }
    </script>

</body>
</html>
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .header {
            background-color: #4CAF50;
            color: white;
            padding: 15px 0;
            text-align: center;
        }
        .nav {
            background-color: #333;
            overflow: hidden;
        }
        .nav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        .nav a:hover {
            background-color: #ddd;
            color: black;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            text-align: center;
        }
        .btn-logout {
            background-color: #f44336;
            color: white;
            padding: 10px 20px;
            border: none;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn-logout:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>Recipe Management System</h1>
    </div>

    <div class="nav">
        <a href="dashboard.php">Home</a>
        <a href="index.php">View Recipes</a>
        <a href="add_recipe.php">Add Recipe</a>
        <a href="favorites.php">Favorite Recipes</a>
        <a href="logout.php" class="btn-logout" style="float:right;">Logout</a>
    </div>

    <div class="container">
        <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
        <p>Manage your recipes and explore new ones.</p>
    </div>

</body>
</html>

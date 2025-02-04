
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
    <title>Welcome Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #4CAF50;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        .content {
            text-align: center;
            padding: 50px;
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
        <h1>Welcome to Your Dashboard</h1>
    </div>

    <div class="container">
        <div class="content">
            <h2>Hello, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
            <p>Welcome to your dashboard. Here you can manage your account and settings.</p>

        
            <a href="logout.php" class="btn-logout">Logout</a>
        </div>
    </div>
</body>
</html>

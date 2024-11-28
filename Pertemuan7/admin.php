<?php 
session_start();
if($_SESSION['role'] == 'admin'){
    // header('Location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        /* Styling untuk body */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #1d4350, #a43931);
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
        }

        /* Styling untuk header */
        h1 {
            font-size: 28px;
            margin-bottom: 20px;
            text-align: center;
        }

        /* Styling untuk link logout */
        a {
            display: inline-block;
            padding: 10px 20px;
            background: #ff5f6d;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            transition: background 0.3s;
        }

        a:hover {
            background: #ff3030;
        }

        /* Container untuk elemen */
        .container {
            text-align: center;
            padding: 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat datang administrator: <?php echo $_SESSION['name']; ?></h1>
        <a href="./backend/logout.php">Logout</a>
    </div>
</body>
</html>

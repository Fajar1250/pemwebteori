<?php 
session_start();
if($_SESSION['role'] == 'user'){
    // echo "Anda bukan role user";
    // header('Location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #1d4350, #a43931); /* Gradien untuk latar belakang */
            color: white;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            text-align: center;
            background: rgba(255, 255, 255, 0.1);
            padding: 40px 50px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 450px;
        }

        .container h1 {
            font-size: 28px;
            margin-bottom: 20px;
            color: #fff;
        }

        .container p {
            font-size: 18px;
            color: #fff;
            margin-top: 15px;
        }

        .container a {
            display: inline-block;
            padding: 12px 20px;
            background: #ff5f6d;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s ease;
            margin-top: 20px;
        }

        .container a:hover {
            background: #ff3030;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat datang, <?php echo htmlspecialchars($_SESSION['name']); ?>!</h1>
        <p>Anda berhasil masuk ke halaman Dashboard.</p>
        <a href="./backend/logout.php">Logout</a>
    </div>
</body>
</html>

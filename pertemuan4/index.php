<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ini halaman home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="login-container">
<div class="login-box">
    <h1>Ini halaman login</h1>
    <div class="input-group">
    <form action="./backend/login.php" method = "POST" >
    </div>
    <div class="input-group">
        <input type="email" name="email" id="email" placeholder="email"/>
</div>
            <div class="input-group">
        <input type="Password" name="Password" id="Password" placeholder="Password"/>
        </div>

        <button type="submit" class="btn">login</button>

    </form>

    <?php

        if(isset($_POST['email']) || isset ($_POST['password'])) {
            $email = $_POST ['email'];
            $Password = $_POST ['Password'];

            echo $email;


        }


    ?>

    
</body>
</html>
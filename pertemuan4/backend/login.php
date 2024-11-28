<?php

    if(isset($_POST['email']) || isset ($_POST['password'])) {
        $email = $_POST ['email'];
        $Password = $_POST ['Password'];

        if($email == 'fajar@gmail.com' && $Password == '123'){
            header('Location: ./dashboard.php');

        } else {
            echo "email atau password salah";
        }


    }


?>
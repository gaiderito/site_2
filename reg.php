<?php

    session_start();
    require_once 'db.php';
    $login = $_POST['login'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $repeatpass = $_POST['repeatpass'];

    

    if ($pass === $repeatpass) {
        
        mysqli_query($connect, "INSERT INTO `users` (`login`, `email`, `pass`) VALUES ('$login', '$email', '$pass')");
        header('Location: index.php');

    } else {
        header('Location: register.php');
    }

    
    ?>


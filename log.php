<?php

    session_start();
    session_name($login);
    require_once 'db.php';

    $login = $_POST['login'];
    $pass = $_POST['pass'];

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);   

        $_SESSION['user'] = [
            "id" => $user['id'],
            "login" => $user['login'],
            "email" => $user['email']
        ];

        header('Location: index.php');

    } else {
        header('Location: login.php');
    }
    ?>

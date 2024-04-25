<?php 

    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = $_POST['password'];

    $check_user = mysqli_query($link, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) { // если пользователь найден
        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "login" => $user['login'],
            "FIO" => $user['FIO'],
            "phone" => $user['phone'],
            "mail" => $user['mail'],
        ];

        header('location: ../statement.php');
    } else {
        $_SESSION['message'] = 'Неверный логин или пароль';
        header('Location: ../autoris.php');
    }
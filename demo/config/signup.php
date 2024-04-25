<?php

    session_start();
    require_once 'connect.php';
   

    $FIO = $_POST['FIO'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $password = $_POST['password'];

    if ($FIO == '') {
        $_SESSION['message'] = 'Заполните все поля!';
        header('Location: ../register.php');
    } else if ($email == '') {
        $_SESSION['message'] = 'Заполните email!';
        header('Location: ../register.php');
    } else if ($password == '') {
        $_SESSION['message'] = 'Заполните паролЬ!';
        header('Location: ../register.php');
    } else if ($phone_number == '') {
        $_SESSION['message'] = 'Заполните подтверждение пароля!';
        header('Location: ../register.php');
    } else {
        mysqli_query($link, "INSERT INTO `users` (`id`, `login`, `password`, `FIO`, `phone`, `mail`) VALUES (NULL, '$login', '$password', '$FIO', '$phone_number', '$email')");
        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../autoris.php');
    }

<?php 

    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = $_POST['password'];


    if ($login == 'copp' && $password == 'password') { // если пользователь найден
        header('location: ../admin_panel.php');
    } else {
        $_SESSION['message'] = 'Неверный логин или пароль';
        header('Location: ../admin_autoris.php');
    }
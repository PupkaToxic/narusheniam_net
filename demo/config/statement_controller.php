<?php

    session_start();
    require_once 'connect.php';
   
    $id = $_SESSION['user']['id'];
    $description = $_POST['description'];
    $auto = $_POST['auto'];
    $status = $_POST['status'];

   if ($auto == '') {
        $_SESSION['message'] = 'Заполните все поля!';
        header('Location: ../add_statement.php');
    } else if ($description == '') {
        $_SESSION['message'] = 'Заполните все поля!';
        header('Location: ../add_statement.php');
    } else {
        mysqli_query($link, "INSERT INTO `statements` (`id`, `description`, `auto_number`, `status`, `user_id`) VALUES (NULL, '$description', '$auto', '$status', '$id')");
        $_SESSION['message'] = 'Заявление добавлено!';
        header('Location: ../statement.php');
    }

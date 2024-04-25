<?php 
    session_start();
    require_once "connect.php";

    $Name = $_POST['Name'];
    $FName = $_POST['FName'];
    $OName = $_POST['OName'];
    $Phone = $_POST['Phone'];
    $login = $_POST['login'];
    $password = $_POST['password'];

    if ($Name == '') {
        $_SESSION['message'] = "1Пустая строка";
        header('Location: ../register.php');
    }
    else if($FName == '') {
        $_SESSION['message'] = "2Пустая строка";
        header('Location: ../register.php');
    }
    else if($OName == '') {
        $_SESSION['message'] = "3Пустая строка";
        header('Location: ../register.php');
    }
    else if ($Phone == '') {
        $_SESSION['message'] = "4Пустая строка";
        header('Location: ../register.php');
    }
   
    else if ($login == '') {
        $_SESSION['message'] = "5Пустая строка";
        header('Location: ../register.php');
    }
    else if ($password == '') {
        $_SESSION['message'] = "6Пустая строка";
        header('Location: ../register.php');
    }
    

    else {mysqli_query($link, "INSERT INTO `users` (`id`, `Name`,`FName`,`OName`, `Phone`, `login`, `password`) VALUES  (NULL, '$Name','$FName','$OName', '$Phone', '$login', '$password')");
    header('Location: ../autorization.php');}
    ?>
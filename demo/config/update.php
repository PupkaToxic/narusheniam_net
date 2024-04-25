<?php

    session_start();
    require_once 'connect.php';
   
   $id = $_POST['id'];
   $status = $_POST['status'];
    
    mysqli_query($link, "UPDATE `statements` SET `status` = '$status' WHERE `statements`.`id` = '$id'");
    header('Location: ../admin_panel.php');
    
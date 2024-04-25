<?php

    $servername = "localhost"; // соединение с бд
    $database = "narusheniam_net";
    $username = "root";
    $password = "";
    
    $link = mysqli_connect($servername, $username, $password, $database);
    
    if (!$link) {
        die('Error');
    }
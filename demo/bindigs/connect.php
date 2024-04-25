<?php 
   $servername = "localhost"; 
   $database = "demo";
   $username = "root";
   $password = "";
   
   $link = mysqli_connect($servername, $username, $password, $database);
   
   if (!$link) {
       die('Error');
   }
<?php
    $server = "localhost";
    $username = "root";
    $password  = "";
    $database = "todolist";

    $conn = mysqli_connect($server, $username, $password, $database);

    if(!$conn){
        die("<script>('Connection Failed')</script>");
    }
?>
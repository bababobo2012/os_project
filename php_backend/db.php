<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "project_os";
    $conn = new mysqli($servername, $username, $password, $database)or die("Connect failed: %s\n". $conn -> error);
    mysqli_set_charset($conn,"utf8");
?>

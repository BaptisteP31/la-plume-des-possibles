<?php
    $servername = 'db';
    $username = "test";
    $password = "test";
    $dbname = "test";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("". $conn->connect_error);
    }
?>
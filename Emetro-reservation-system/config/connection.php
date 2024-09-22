<?php
    //local devlopment

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "rdb";
    //remote databse connectionn

    
    $conn = new mysqli($servername, $username, $password, $database);
    if($conn -> connect_error){
        die("Connection failed: " . $conn -> connect_error);
    }
?>
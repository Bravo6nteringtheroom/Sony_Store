<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'star_byte';
    $connect = new mysqli($servername,$username,$password, $dbname);

    if(!$connect){
        die("Connection failed: " . mysqli_connect_errno());
    }
?>
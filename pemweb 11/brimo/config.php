<?php
    $server     = "localhost";
    $user       = "root";
    $pass       = "";
    $database   = "badboys";
    $conn       = mysqli_connect($server, $user, $pass, $database);
    if (!$conn) {
        die("koneksi ke database gagal : " . mysqli_connect_error());
    } 
?>
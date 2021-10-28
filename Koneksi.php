<?php
    //Koneksi Database DB_PSB
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'bonafide';
    
    $conn = mysqli_connect($host, $user, $pass, $db);

    if(!$conn){
        echo 'Error : '.mysqli_connect_error($conn);
    }
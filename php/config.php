<?php 
    

    $domain = "aawed.ddns.net"; 
    $host = "localhost";
    $user = "root"; 
    $pass = ""; 
    $db = "urlshortener";

    $conn = mysqli_connect($host, $user, $pass, $db);
    if(!$conn){
        echo "Database connection error".mysqli_connect_error();
    }
?>
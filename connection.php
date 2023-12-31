<?php
error_reporting(0);
    $servername = "localhost";
    $username="USER";
    $password="CTFPASSWORD";
    $dbname="CTF2";
    $conn= mysqli_connect($servername,$username,$password,$dbname);

    if($conn){
        echo "Connection ok";
    }
    else{
        echo "Connection failed".mysqli_connect_error();
    }
?>
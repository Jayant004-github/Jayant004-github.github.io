<?php
error_reporting(0);
$servername = "192.168.4.144";
$username="MYSQL_USER";
$password="MYSQL_PASSWORD";
$dbname="MYSQL_DATABASE";
$conn= mysqli_connect($servername,$username,$password,$dbname);

if($conn){
    echo "Connection ok";
}
else{
    echo "Connection failed".mysqli_connect_error();
}
?>
<?php
$servername="localhost";
$username="root";
$password="YOUR_PASSWORD";
$dbname="login_users";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection Failed".$conn->connect_error);
}

?>

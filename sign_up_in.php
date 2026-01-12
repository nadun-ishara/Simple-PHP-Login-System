<?php
session_start();
include 'db.php';

if(isset($_POST['signup'])){
$user=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['password'];

$checkUser="SELECT * FROM users WHERE username='$user'";
$result=$conn->query($checkUser);
if($result->num_rows >0){
    echo "<script>alert ('This username already exists.');
    window.location='index.php';</script>";
}
else{
    $hashed_pass=password_hash($pass,PASSWORD_BCRYPT);
    $sql ="INSERT INTO users(username, email, password) VALUES ('$user','$email','$hashed_pass')";
    if($conn->query($sql)=== TRUE){
        echo "<script>alert('Account created successfully.');
        window.location='index.php';</script>";
    }
    else{
        echo "Error: ".$conn->error;
    }
}
}
if(isset($_POST['signin'])){
$user=$_POST['username'];
$pass=$_POST['password'];

$sql="SELECT * FROM users WHERE username='$user' OR email='$user'";
$result=$conn->query($sql);

if($result->num_rows>0){
    $row=$result->fetch_assoc();

    if(password_verify($pass, $row['password'])){
        $_SESSION['username'] =$row['username'];
        echo "<script>alert('Logged in successfully.');
        window.location='dashboard.php';</script>";
    }
    else{
        echo "<script>alert('Incorrect password.'); 
        window.location='index.php';</script>";
    }
}
    else{
        echo "<script>alert('There is no such user.');
        window.location='dashboard.php';</script>";
    }
}
?>
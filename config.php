<?php
session_start();
$host="localhost";
$user="root";
$pass="";
$dbname="cs21d284";

$con=mysqli_connect($host,$user,$pass,$dbname);

if(!$con){
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['but_submit'])){
    $username=$_POST['uname'];
    $password=$_POST['password'];
    $mail = $_POST['wawa'];
    $sql= "INSERT INTO users(username,password,mail)VALUES('$username','$password','$mail')";
    if(mysqli_query($con,$sql)){
        echo "New record successfully added!";
    }
    else{
        echo "Error: " . $sql . " " . mysqli_error($con);
    }
}

?>
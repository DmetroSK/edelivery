<?php
session_start();

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'edelivery');
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$username=$_POST['username'];
$email=$_POST['email'];
$tel=$_POST['tp'];
$pass=$_POST['password'];
$province=$_POST['province'];




    $reg="insert into usertable(firstname,lastname,username,email,tp,password,province,usertype) values ('$firstname','$lastname','$username','$email','$tel','$pass','$province','admin')";
    mysqli_query($con,$reg);
    header('location:index.php');


?>
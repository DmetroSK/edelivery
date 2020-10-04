<?php
session_start();
if(!isset($_SESSION['username'])){
header('location:edelivery.php');}

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'edelivery');
$username=$_SESSION['username'];
$date=$_POST['date'];
$date = date('Y-m-d', $date);
$pickup=$_POST['pickup'];
$dropdown=$_POST['dropdown'];
$weight=$_POST['weight'];


    $reg="insert into trucktable(username,date,pickup,dropdown,weight) values ('$username','$date','$pickup','$dropdown','$weight')";
    mysqli_query($con,$reg);
    header('location:truckdelsucses.php');
  

?>
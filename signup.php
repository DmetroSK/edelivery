<?php
session_start();
$con =mysqli_connect('localhost','root','');
mysqli_select_db($con,'edelivery-signup');
$fname=$_POST['FirstName'];
$sname=$_POST['SecondName'];
$uname=$_POST['UserName'];
$pass=$_POST['Password'];

$s="select * from users where name='$uname'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num==1){
    echo "Username Already Taken";
}
else{
    $reg="insert into users(UserName,Password) values('$uname','$pass')";
    mysqli_query($con,$reg);
    echo"Registration Successful";
    
}

?>
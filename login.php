<?php
session_start();
$usertype="";
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'edelivery');
$username=$_POST['username'];
$pass=$_POST['password'];
$s="select * from usertable where username='$username' && password='$pass' ";
$result=mysqli_query($con, $s);
$num=mysqli_num_rows($result);
if($num==1){
 $_SESSION['username']=$username;
      if ($result->num_rows>0){
  while($row=$result->fetch_assoc())
  {
   $usertype=$row["usertype"];
    }
if($usertype=='user')
{echo "<script>alert('Successfully Login $username '); window.location = 'edelivery.php';</script>";}
else if ($usertype=='admin') 
{echo "<script>alert('Successfully Login $username'); window.location = 'admin.php';</script>";}  
else
{ {echo "<script>alert('Login Failed'); window.location = 'index.php';</script>";}

}
}
}

echo "<script>alert('Login Failed'); window.location = 'index.php';</script>";


?>
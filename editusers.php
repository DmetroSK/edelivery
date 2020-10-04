<html>
<head>
<meta name='viewport' content='width=device-width'>
<title>
E-Delivery.lk | Welcome
</title>
<link rel='stylesheet' type='text/css' href='./css/style.css'>
</head>
<body>
<header>
<div class='container'>

<div id='branding'>
<marquee direction='right'><img src='./images/icondel.png'  ></marquee>
<h1 ><span class='highlight'>e</span><span id='del'>-delivery.lk</span></h1> 
<p class='para'><B>We Move Anything and Everything For You</B></p>
</div>
<nav>
<ul>
<li class='current'><a href='admin.php'>home</a></li>
<li><a href='about.php'>about</a></li>
<li><a href='logout.php'>Log out</a></li>


</ul>
</nav>
</div>
</header>
<section  id='showcase'>
<div class='container'>

<h1>We Deliver Your Goods</h1>
<p>We deliver things you order from the shop to your doorstep.<br>Trust-worthy deliver system that had
been there for decades.<br>we never dissapoints you</p>
</div>
</section>
<section id='newsletter'>
<div class='container'>
<h1>Sign In</h1><br>
<form method="post" action='login.php' enctype="text">
<input style='width: 250px' type='text' name='username' placeholder='username'><br>
<input type='password' name='password' placeholder='password'><br>
<button type='submit' class='button_1'>Sign In</button>

</form>
</div>
</section>
<section>
    <div class='container'>
  <h1 style='text-align: center'>delivery history</h1>
  <table border="2" cellpadding="7" style="width:50%" align="center" >
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
      <th>email</th>
       <th>Telephone</th>
      <th>Password</th>
      <th>Province</th>
      <th>Usertype</th>
      
    </tr>
<?php
$conn=new mysqli('localhost','root','','edelivery');
if ($conn->connect_error){
    die ("connection failed:".$conn->connect_error);
}

$sql="SELECT firstname,lastname,username,email,tp,password,province,usertype FROM usertable ";
$result=$conn->query($sql);
if ($result->num_rows>0){
  while($row=$result->fetch_assoc()){
    echo"<tr><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td>"."<td>".$row["username"]."</td>"."<td>".$row["email"]."</td><td>".$row["tp"]."</td>"."<td>".$row["password"]."</td>"."<td>".$row["province"]."</td>"."<td>".$row["usertype"]."</td>";
    echo "<td><form method=post>
                        <input name=un type=hidden value='".$row['username']."';>
                        <input type=submit name=submit value=Delete>
                        </form></td>";
  }
  echo"</tr>";
  echo"</table>";

 if($_SERVER['REQUEST_METHOD'] == "POST")
    {
    if(isset($_POST['un']))
    {
    $un2 = mysqli_real_escape_string($conn,$_POST['un']);
    $sql1 = mysqli_query($conn,"DELETE FROM usertable WHERE username ='$un2'");
    if(!$sql1)
    {
        echo ("Could not delete rows" .mysql_error());
    }
    $result=$conn->query($sql1);
    }
    }


}else{
  echo"0 result";
}

?>
</section>
</section>
<footer>
<p>All rights reserved by the <a href='edelivery.html'>e-delivery.lk<a/> &copy 2019</p>
</footer>
</body>
</html>
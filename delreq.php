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
      <th>User Id</th>
      <th>User Name</th>
      <th>Pick Up</th>
      <th>Drop Down</th>
      <th>Weightx</th>
    <th>State</th>
      
    </tr>
<?php
$conn=new mysqli('localhost','root','','edelivery');
if ($conn->connect_error){
    die ("connection failed:".$conn->connect_error);
}

$sql="SELECT id,username,pickup,dropdown,weight,state FROM trucktable ";
$result=$conn->query($sql);
if ($result->num_rows>0){
  while($row=$result->fetch_assoc()){
    echo"<tr><td>".$row["id"]."</td><td>".$row["username"]."</td><td>".$row["pickup"]."</td>"."<td>".$row["dropdown"]."</td>"."<td>".$row["weight"]."</td>"."<td>".$row["state"]."</td>";
    
 echo "<td><form method=post>
                        <input name=id1 type=hidden value='".$row['id']."';>
                        <input type=submit name=Accept value=Accept>
                        </form></td>";

                        echo "<td><form method=post>
                        <input name=id2 type=hidden value='".$row['id']."';>
                        <input type=submit name=Reject value=Reject>
                        </form></td>";

     echo "<td><form method=post>
                        <input name=id3 type=hidden value='".$row['id']."';>
                        <input type=submit name=submit value=Delete>
                        </form></td>";
  }
    echo"</tr>";
  echo"</table>";

if($_SERVER['REQUEST_METHOD'] == "POST")
    {
    if(isset($_POST['id1']))
    {
    $id11 = mysqli_real_escape_string($conn,$_POST['id1']);
    $sql2 = mysqli_query($conn,"update trucktable set state='Accept' WHERE id ='$id11'");

    }


else if(isset($_POST['id2']))
    {
    $id22 = mysqli_real_escape_string($conn,$_POST['id2']);
    $sql3 = mysqli_query($conn,"update trucktable set state='Reject' WHERE id ='$id22'");
    
    }

else if(isset($_POST['id3']))
    {
    $id33 = mysqli_real_escape_string($conn,$_POST['id3']);
    $sql4 = mysqli_query($conn,"DELETE FROM trucktable WHERE id ='$id33'");
   
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
<?php
session_start();
if(!isset($_SESSION['username'])){
header('location:edelivery.php');}

?>
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
   <h1 style='text-align: center'> Hi <?php echo $_SESSION['username']; ?></h1>
<ul>
<li class='current'><a href='edelivery.php'>home</a></li>
<li><a href='about.html'>about</a></li>
<li><a href='logout.php'>Log out</a></li>
</ul>
</nav>
</div>
</header>


<section id='boxes'>
<div class='container'>
  <h1 style='text-align: center'>delivery history</h1>
  <table border="2" cellpadding="7" style="width:50%" align="center" >
    <tr>
      <th>date</th>
      <th>pickup</th>
      <th>dropdown</th>
      <th>weight</th>
      <th>state</th>
    </tr>
<?php
$conn=new mysqli('localhost','root','','edelivery');
if ($conn->connect_error){
    die ("connection failed:".$conn->connect_error);
}
$un=$_SESSION['username'];
$sql="SELECT id,date,pickup,dropdown,weight,state  FROM trucktable where username='$un' ";
$result=$conn->query($sql);
if ($result->num_rows>0){
  while($row=$result->fetch_assoc()){
    echo"<tr><td>".$row["date"]."</td><td>".$row["pickup"]."</td>"."<td>".$row["dropdown"]."</td>"."<td>".$row["weight"]."</td>"."<td>".$row["state"]."</td>";
   echo "<td><form method=post>
                        <input name=id1 type=hidden value='".$row['id']."';>
                        <input type=submit name=submit value=Delete>
                        </form></td>";
  }
   echo"</tr>";
  echo"</table>";

 if($_SERVER['REQUEST_METHOD'] == "POST")
    {
    if(isset($_POST['id1']))
    {
    $id2 = mysqli_real_escape_string($conn,$_POST['id1']);
    $sql1 = mysqli_query($conn,"DELETE FROM trucktable WHERE id ='$id2'");
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
<footer>
<p>All rights reserved by the <a href='edelivery.html'>e-delivery.lk<a/> &copy 2019</p>
</footer>
</body>
</html>

<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:edelivery.php');
}
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
<li class='current'><a href='edelivery.html'>home</a></li>
<li><a href='truckdelsucses.html'>delivery</a></li>
<li><a href='about.html'>about</a></li>
<li><a href='logout.php'>Log out</a></li>
</ul>
</nav>
</div>
</header>


<section id='boxes'>
<div class='container'>
   <table border="0" cellpadding="7" style="width:50%" align="center" >
<form action='truckreg.php' method='post'>
<tr><td>   <lable>user name</lable></td>
  <td><lable name=username><?php echo $_SESSION['username']; ?></lable></td></tr>
  <tr><td>   <lable>Date</lable></td>
  <td><input type="date" name="date" dateformat="yyyy-mm-dd"></td></tr>
   <tr><td><label>pick up location</label></td>
  <td> <select name='pickup'>
   <option value='Kaluthara'>Kaluthara</option>
   <option value='Colombo'>Colombo</option>
   <option value='Gampaha'>Gampaha</option></select></td></tr>
   <tr><td><label>drop down location</label></td>
  <td> <select name='dropdown'>
   <option value='Kaluthara'>Kaluthara</option>
   <option value='Colombo'>Colombo</option>
   <option value='Gampaha'>Gampaha</option></select></td></tr>
   <tr><td><label>weight</label></td><td><input type='number' name='weight'></td></tr>
   <tfoot><td><button type='submit'>Submit</button></td></tfoot>
  
</form>
   </table>
</section>
<footer>
<p>All rights reserved by the <a href='edelivery.html'>e-delivery.lk<a/> &copy 2019</p>
</footer>
</body>
</html>
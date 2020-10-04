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
<li class='current'><a href='edelivery.php'>home</a></li>
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
<section id='boxes'>
<div class='container'>
<div class='box'>
<img src='./images/image1.png' usemap='#img1'>
<map name='img1'>
<area shape='circle' coords='50,46,20' href='truck.php'>
</map>
<h3 >trucks</h3></a>
<p>deliver your goods weigh more than 500kg from the trucks</p>
</div>
<div class='box'>
<img src='./images/image2.png' style='margin-top:2px' usemap='#img2'>
<map name='img2'>
<area shape='circle' coords='45,40,20' href='tukreg.php'>
</map>
<h3 style='margin-top:30px'>tuks</h3>
<p>deliver your goods weigh between 50kg to 100kg from the tucks</p>
</div>
<div class='box'>
<img src='./images/image3.png' usemap='#img3' >
<map name='img3'>
<area shape='circle' coords='40,46,30' href='bikereg.php'>
</map>
<h3 style='margin-top:5px'>bikes</h3>
<p>deliver your goods weigh less than 50kg from the bikes</p>
</div>
</div>
</section>
<footer>
<p>All rights reserved by the <a href='edelivery.html'>e-delivery.lk<a/> &copy 2019</p>
</footer>
</body>
</html>
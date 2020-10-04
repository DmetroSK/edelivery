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
E-Delivery.lk | About
</title>
<link rel='stylesheet' type='text/css' href='./css/style.css'>
</head>
<body>
<header>
<div class='container'>
<div id='branding'>
<h1><span class='highlight'>E</span>-Delivery.lk</h1> 
</div>
<nav>
<ul>
<li ><a href='edelivery.php'>Home</a></li>
<li class='current'><a href='about.html'>About</a></li>
<li><a href='logout.php'>Log Out</a>	</li>
</ul>
</nav>
</div>
</header>

</section>
<section id='newsletter'>
<div class='container'>
<h1>Register Here</h1>
<form>
<input type='email' placeholder='input your email here'>
<button type='submit' class='button_1'>subscribe</button>
</form>
</div>
</section>
<section id='main'>
<div class='container'>
<article id='main-col'>
<h1 class='page-title'>About Us</h1>
<ol type="1">
<li><a href='more about.php#A'style='text-decoration:none;color:#000'>How does e-delivery work?</a></li>
<li><a href='more about.php#B'style='text-decoration:none;color:#000'>How get e-delivery service?</a></li>
<li><a href='more about.php#C'style='text-decoration:none;color:#000'>How to register on e-delivery web site?</a></li>
<li><a href='more about.php#D' style='text-decoration:none;color:#000'>e-delivery pay</a></li>
<li><a href='more about.php#E' style='text-decoration:none;color:#000'>Benifits from e-delivery</a></li>
 </ol>
</article>
<aside id='sidebar'>

<img src='./images/bg.jpg'width="500" height="300" >

</aside>
</div>
</section>
<footer>
<p>All rights reserved by the <a href='edelivery.php'>e-delivery.lk<a/> &copy 2019</p>
</footer>
</body>
</html>
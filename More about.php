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
E-Delivery.lk | More About
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
<h1 class='page-title'>About Us</h1>
<ol>
<li><h2><a name="A">How does e-delivery work?</a></h2></li>
<p>E-delivery is a transportation website.This website pairs users with anything which is in weight category.</p>
<p>Once users log into the website,they can order any brand from the manufacturer in Sri Lanka.Once the order is completed and paid for
 the brand then delivered by an e-delivery partner to the user's location.</p>
<li><h2><a name="B">How get e-delivery service?</a></h2></li>
<p>You should fill the product location and your location in the home page's delivery model(Trucks,Tuks,Bikes)</p>
<p>Once registered on e-delivery website you can enter your urgency from next time by entering the username and password on the home page.</p>
<li><h2><a name="C">How to register on e-delivery web site?<a></h2></li>
<p>For the first time anyone using the e-delivery web site needs to register on our web site.For it you will need to fill in the registration
 form on the SIGNIN page.After that you can easily use e-delivery service again.</p>
<li><h2><a name="D">E-delivery pay</a></h2></li>
<p>E-delivery charge you in two categories.</p>
<ul type="disc"> 
<li>Depending on the vehicle used.</li>
<li>Depending on the distance between product location and customer's location.</li>
</ul>
<p>On the home page you can see the cost per vehicle for 1km.For every km you increase,fares will increase according to each vehicle.</p>
<p>When you recive the order,e-delivery agent will give you a recipt for the service.You have to pay the fee in cash to the agent.</p>
<li><h2><a name="E">Benifits from e-delivery</a></h2></li>
<ul type="square">
<li>E-delivery give you a reliable quick service</li>
<li>We get a convenient and reasonable charge for anyone.</li>
<li>Multiple benifits can be obtained if you continue to work with us.</li>
<li>Every time e-delivery is committed to providing you with the best service.</li>
</ul>
</ol> 
</div>
</section>
<footer>
<p>All rights reserved by the <a href='edelivery.html'>e-delivery.lk<a/> &copy 2019</p>
</footer>
</body>
</html>
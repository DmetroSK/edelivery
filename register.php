<html>
<title> Registration Form</title>
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
<p class='para'>We Move Anything and Everything For You</p>
</div>
<nav>
<ul>
<li ><a href='index.php'>home</a></li>
<li><a href='about.html'>about</a></li>
<li class='current'><a href='register.php'>sign up</a></li>
</ul>
</nav>
</div>
</header>
<body>
<form method="post" action='reg.php' enctype="text">


<table border="0" cellpadding="7" style="width:50%" align="center" >
<thead> 
        <tr>
            <th colspan ="2"><center> Sign up <b>e-delivery</b> </center></th>
            
        </tr>
</thead>
        <tr>
	    <td>First Name</td>
            <td><input type="text" Name="firstname" placeholder="First Name" size ="60" required></td>
            
        </tr>
        <tr>
	    <td>Last Name</td>
            <td><input type="text" Name="lastname" placeholder="Last Name" size ="60" required></td>
            
        </tr>
		<tr>
	    <td>User Name</td>
            <td><input type="text" Name="username" placeholder="User Name" size ="60" required></td>
            
        </tr>
        <tr>
	    <td>E-mail Address</td>
            <td><input type="email" Name="email" placeholder="E-mail Address" size ="60" required></td>
            
        </tr>
		<tr>
	    <td>Telephone</td>
            <td><input type="text" Name="tp" placeholder="telephone number" size ="60" required></td>
            
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" Name="password" placeholder="Password" size ="20" required></td>
            
        </tr>
        <tr>
            <td>Province</td>
            <td>
		<select name="province">
		<option value='Central'>Central</option>
		<option value='Eastern'>Eastern</option>
		<option value='North Central'>North Central</option>
		<option value='Northern'>Northern</option>
		<option value='North Western'>North Western</option>
		<option value='Sabaragamuwa'>Sabaragamuwa</option>
		<option value='Southern'>Southern</option>
		<option value='Uva'>Uva</option>
		<option value='Western'>Western</option>
		</select>
	    </td>
        </tr>
       
        
        
	<tfoot>
        <tr>
            <td colspan="2"><center><button type="submit">Submit</button> &nbsp   <button type="clear" >Clear</button></center></td>
        </tr>
	</tfoot>
</table>
<footer>
<p>All rights reserved by the <a href='edelivery.html'>e-delivery.lk<a/> &copy 2019</p>
</footer>
</body>
</form>
</html>

<!doctype html>
<html>
	<head><title>clickOcollege</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link  rel="stylesheet" type="text/css" href="css\clickOcollege.css">
	<link rel= "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php

session_start();
if(isset($_SESSION['username']))
{
	$username=$_SESSION['username'];
	   echo $username;
	  


}


else {
	

	header("location:logout.php");
		
}
?>	


</head>


<body>
    
	<div id="container">

<ul>
	  <li><a class="active" href="#home">Home</a></li>
	  <li class="dropdown"><a class="dropbtn" href="#location">Location</a>
	  	<div class="dropdown-content">
	  		<a href="#">Bhopal</a>
	  		<a href="#">Ranchi</a>
	  		<a href="#">Delhi</a>
	  		<a href="#">Indore</a>
	  	</div>
	  </li>

	  <li><a href="#contact">Contact</a></li>
	  <li><a href="#about">About</a></li>
	  <li><a href="loginform.php">Login</a></li>
	  <li><a href="registration.php">Signup</a></li>
	  <div class="search-container">
	 <input type ="text" placeholder="Search...">
	 <button type="submit"><i class="fa fa-search"></i></button>
	</div>
	</ul>
	    
    </div>

	</div>
	<div id="slider">
					  <img class="mySlides" src="images/sistec.jpg" >
					  <img class="mySlides" src="images/iit-bombay.jpg" >
					  <img class="mySlides" src="images/maxresdefault.jpg" >
					</div>
					<!--for slider-->
					<script>
					var myIndex = 0;
					carousel();

					function carousel() {
						var i;
						var x = document.getElementsByClassName("mySlides");
						for (i = 0; i < x.length; i++) {
						   x[i].style.display = "none";  
						}
						myIndex++;
						if (myIndex > x.length) {myIndex = 1}    
						x[myIndex-1].style.display = "block";  
						setTimeout(carousel, 5000);    
					}
					</script>
				

    <div id="waste">
    	
	
    	<div id="title">
    	<h1>clickOcollege</h1>
    </div>
   ncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci dsdddddddddddddddddddddsddffsdd,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndlddncjchondci ,ncnnnncsdnlncod,jcacndldd
ncjchondci ,ncnnnncsdnlncod,jcacndldd
</div>

	<div id="footer">
						<div id="left">
							<h3>NAVIGATION</h3>
							<ul>
								
								<a href="#">HOME</a><br>
								<a href="#">ETYMOLOGY</a><br>
								<a href="#">DESCRIPTION</a><br>
								<a href="#">HABITATE</a><br>
								<a href="#">ABOUT US</a><br>
								<a href="#">CULTURE</a><br>
							</ul>
					
						</div>
						<div id="mleft">
							<h3>FOR MEMBERS</h3>
							<ul>
								<a href="#">FORUMS</a><br>
								<a href="#">PROMOTIONS</a><br>
								<a href="#">SIGN IN</a><br>
								<a href="#">NEWS</a><br>
							</ul>
						</div>
					
					
						
					</div>
				


</body>


</html>
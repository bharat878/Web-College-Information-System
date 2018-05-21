
<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">


	<link  rel="stylesheet" type="text/css" href="css/adminlogin1.css">
	
	
	<link rel="icon" type="image/png" href="images/man-reading.png"/>
</head>


<body>
    
	<div id="container">

<ul>
	  <li><a class="active" href="http://localhost/test/clickOcollege.html">Home</a></li>
	  <li class="dropdown"><a class="dropbtn" href="#location">Location</a>
	  	<div class="dropdown-content">
	  		<a href="bhopal.php">Bhopal</a>
	  		<a href="ranchi.php">Ranchi</a>
	  		<a href="delhi.php">Delhi</a>
	  		<a href="chennai.php">Chennai</a>
	  	</div>
	  </li>

	  <li><a href="contact.php">Contact</a></li>
	  <li><a href="about.php">About</a></li>
	  <li><a href="mglog.php">Login</a></li>
	  <li><a href="mgreg.php">Signup</a></li>
	  <li><a href="logout.php">logout</a></li>
	 
	</ul>
	    
    </div>

	</div>

<?php

include("dbconnect.php");
session_start();



if(isset($_POST['username']) && isset($_POST['password']))
{
	$name = $_POST['username'];
	$password = $_POST['password'];

		$query = "select status from manager where name='$name'";

		$query_get_user=mysql_query($query);

		$row=mysql_fetch_assoc($query_get_user);

		$status=$row['status'];

		


					
		

			$query = "select name, password from manager where name = '$name' AND password ='$password'";




			if($status==1)
			  {

					if($query_run = mysql_query($query))
					{
						$query_num_rows = mysql_num_rows($query_run);

						if($query_num_rows>0)
						{
							
							$_SESSION['name']=$name;
							

							header("location:colreg.php");

					
							
						}
						else
						{
							
							echo "invalid username and password, please try again.";
						}

					}
				}
				else
				{
					echo "you don't have permission to login";
				}
		
}
?>

<form action = "mglog.php" method="POST">
	 <div class="imgcontainer">

    <img src="../images/student.png"  class="avatar">
  	</div>
		
<div id="login">
<form action="colreg.php" method="POST">
	username: <input type="text" name="username" required=""><br>
	password: <input type="password" name="password" required="">
	<input type="submit" value="Log in">
</form>
</div>

 <div class="container" style="background-color:#f1f1f1">
    
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>

</form>

	
	<form method='POST' action="mgreg.php" >
		   
		  <input type="submit" value="Sign up">
		</form>

</html>
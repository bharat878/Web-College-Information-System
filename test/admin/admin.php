
<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link  rel="stylesheet" type="text/css" href="css\adminlogin.css">
	
	
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
	  <li><a href="loginform.php">Login</a></li>
	  <li><a href="registration.php">Signup</a></li>
	  <li><a href="logout.php">logout</a></li>
	 
	</ul>
	    
    </div>

	</div>

<?php

include("dbconnect.php");
session_start();




if(isset($_POST['username']) && isset($_POST['password']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];

		
			$query = "select username, password from admin where username = '$username' AND password ='$password'";

			if($query_run = mysql_query($query))
			{
				$query_num_rows = mysql_num_rows($query_run);

				if($query_num_rows>0)
				{
					
					$_SESSION['username']=$username;
					

					header("location:approve.php");

			
					
				}
				else
				{
					
					echo "invalid username/password, please try again later";				}

			}
		
}
?>

<form action = "admin.php" method="POST">
	 <div class="imgcontainer">

    <img src="../images/student.png"  class="avatar">
  	</div>		

<div id="login">
<form action="admin.php" method="POST">
	username: <input type="text" name="username"><br>
	password: <input type="password" name="password">
	<input type="submit" value="Log in">
</form>
</div>

 <div class="container" style="background-color:#f1f1f1">
    
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>

</form>


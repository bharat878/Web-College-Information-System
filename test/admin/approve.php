<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link  rel="stylesheet" type="text/css" href="css/approve.css">
	
	
	<link rel="icon" type="image/png" href="../images/man-reading.png"/>

	<style>

	
     </style>


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

if(isset($_SESSION['username'])=='bharat')
{
	$username=$_SESSION['username'];
	   echo "welcome to $username";





$query="select name from manager where status='0'";



$query_get_user = mysql_query($query);
				
					$numrows = mysql_num_rows($query_get_user);

					if($numrows>0)
					{

					$c=0;

					for($c=1;$c<=$numrows;$c++)
					{
						$row = mysql_fetch_assoc($query_get_user);

						$name = $row['name'];?>
						<br><br>
						<?php
						echo "$name ";
					}

						?>

						
						<br><br><form action="mggrant.php" method="POST">
						<input type="submit" name="approve" value="approve"><br><br>
					</form>
				
						<br><br>
						<?php
					
						}
				else
				{
?><br><br><?php
					echo "no manager request";?>

					<div id="logout">
					<form action="logout.php" method="POST">
					 <br><button type="submit" value="logout">logout</button><br><br>
					</form>
				</div>
				

				<?php
			}


					$query="select name from college where status='0'";

					
				
					$query_get_user = mysql_query($query);
					$numrows = mysql_num_rows($query_get_user);

					if($numrows>0)
					{

					$c=0;
					for($c=1;$c<=$numrows;$c++)
					{
						$row = mysql_fetch_assoc($query_get_user);
						$name = $row['name'];?>
						<br><br>
						<?php

						echo "$name ";
					}
						?>

					
						<br><br><form action="clggrant.php" method="POST">
						<input type="submit" name="approve" value="approve"><br>
					</form>


						<?php

					
				}else
				{
					echo "no college request";?>

					<div id="logout">
					<form action="logout.php" method="POST">
					 <br><br><button type="submit" class="signupbtn">logout</button>
					</form>
				</div>


					<?php
				}
			}else
			{
				echo "you are not authorized";
			}
				?>
			

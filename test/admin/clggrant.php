<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link  rel="stylesheet" type="text/css" href="css/approve.css">
	
	
	<link rel="icon" type="image/png" href="../images/man-reading.png"/>

	<style>

	
     </style>

<?php

include("dbconnect.php");
session_start();

if(isset($_SESSION['username'])=='bharat'||isset($_SESSION['username'])=='adarsh')
{
	$username=$_SESSION['username'];
	   echo "welcome to $username";

}



				     	$query = "UPDATE college SET status='1'";

				     	if($query_run = mysql_query($query))
				     	{?>
				     		<br><br>
				     		<?php
				     	
				     	echo "Approved";
				     	

				        }
					     else
					     {
					     	echo 'sorry  again later';
					     }
?>


					<form action="logout.php" method="POST">
					 <br><br><button type="submit" class="signupbtn">logout</button>
					</form>
<?php

include("dbconnect.php");
session_start();

if(isset($_SESSION['username'])=='bharat'||isset($_SESSION['username'])=='adarsh')
{
	$username=$_SESSION['username'];
	   echo "welcome to $username";

}


				     	$query = "UPDATE manager SET status='1'";

				     	if($query_run = mysql_query($query))
				     	{
				     	
				     	echo "Approved";
				     	

				        }
					     else
					     {
					     	echo 'sorry  again later';
					     }



				     	$query = "UPDATE college SET status='1'";

				     	if($query_run = mysql_query($query))
				     	{
				     	
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
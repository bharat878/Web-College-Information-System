	<!doctype html>
<html>
<head>
	<link  rel="stylesheet" type="text/css" href="css\loginform.css">
</head>

<?php

include("dbconnect.php");

if (isset($_POST['change_password']))
 {
	$change_password=$_POST['change_password'];


												
					$query="UPDATE users SET password='$change_password'";
						if($query_run = mysql_query($query))
									     	{
									     	
									     	echo "changed";
									     	

									        }
										     else
										     {
										     	echo 'sorry  again later';
										     }
}										     
?>


<form action = "" method="POST">
	 <div class="imgcontainer">

    <img src="hrithik.jpg" alt="Avatar" class="avatar">
  	</div>
		
<div id="login">
<form action="" method="POST">
	change_password: <input type="text" name="change_password"><br>

</form>
</div>

</form>

	<form method='POST' action="" >
		   
		  <input type="submit" value="Sign up">
		</form>

</html>


				
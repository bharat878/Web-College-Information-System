
<!doctype html>
<html>
<head>
	<link  rel="stylesheet" type="text/css" href="css\loginform.css">
</head>

<?php

include("dbconnect.php");

if(isset($_POST['username'])&&isset($_POST['firstname'])&&isset($_POST['change_password']))
{
	$username = $_POST['username'];
	$firstname = $_POST['firstname'];
	$change_password=$_POST['change_password'];
	

	if(!empty($username)&&!empty($firstname))
		{
			$query = "select firstname from users where username = '$username'";


				$query_get_user=mysql_query($query);


				$row=mysql_fetch_assoc($query_get_user);

				$fname=$row['firstname'];

				if($fname==$firstname)
				 {
				 	
				 $query="UPDATE users SET password='$change_password' where username='$username'";
						if($query_run = mysql_query($query))
									     	{
									     	
									     	echo "changed";
									     	

									        }
										     else
										     {
										     	echo 'sorry  again later';
										     }


				}

				else
				{
					echo 'firstname is not valid';
				}
		}

	
	 else
	 {
	 	echo 'you must supply a firstname';
	 }
}
?>

<form action = "forgot.php" method="POST">
	 <div class="imgcontainer">

    <img src="hrithik.jpg" alt="Avatar" class="avatar">
  	</div>
		
<div id="login">
<form action="change_psd.php" method="POST">
	username: <input type="text" name="username"><br>
	firstname: <input type="text" name="firstname"><br>
	change_password: <input type="text" name="change_password" ><br>
	
	<input type="submit" value="submit">
</form>
</div>

 
</html>
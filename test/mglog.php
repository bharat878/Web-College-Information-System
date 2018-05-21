
<!doctype html>
<html>
<head>
	<link  rel="stylesheet" type="text/css" href="css/mglog.css">
</head>
<?php

include("dbconnect.php");
session_start();



if(isset($_POST['name']) && isset($_POST['password']))
{
	$name = $_POST['name'];
	$password = $_POST['password'];

		if(!empty($name)&&!empty($password))
		{
			$query = "select name, password from manager where name = '$name' AND password ='$password'";

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
					
					
				}

			}
		}

	
	 else
	 {
	 	echo 'you must supply a name and password.';
	 }
}
?>

<form action = "mglog.php" method="POST">
	 <div class="imgcontainer">

    <img src="hrithik.jpg" alt="Avatar" class="avatar">
  	</div>
		
<div id="login">
<form action="colreg.php" method="POST">
	name: <input type="text" name="name"><br>
	password: <input type="password" name="password">
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
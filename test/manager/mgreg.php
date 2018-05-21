
<!doctype html>
<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1">



		<link  rel="stylesheet" type="text/css" href="css\adminlogin.css">

	
	
	<link rel="icon" type="image/png" href="../images/man-reading.png"/>
</head>


<body>
    
	<div id="container">

<ul>
	  <li><a class="active" href="http://localhost/test/clickOcollege.html" >Home</a></li>
	  <li class="dropdown"><a class="dropbtn" href="#location">Location</a>
	  	<div class="dropdown-content">
	  		<a href="../bhopal.php">Bhopal</a>
	  		<a href="../ranchi.php">Ranchi</a>
	  		<a href="../delhi.php">Delhi</a>
	  		<a href="../chennai.php">Chennai</a>
	  	</div>
	  </li>

	  <li><a href="../contact.php">Contact</a></li>
	  <li><a href="../about.php">About</a></li>
	  <li><a href="../loginform.php">Login</a></li>
	  <li><a href="../registration.php">Signup</a></li>
	  <li><a href="../logout.php">logout</a></li>
	 
	</ul>
	    
    </div>

	</div>

<?php
include("dbconnect.php");



	if (isset($_POST['name'])&&isset($_POST['password'])&&isset($_POST['password_again'])&&isset($_POST['contact'])&&isset($_POST['city']))
	{
		$name =$_POST['name'];
		$password =$_POST['password'];
		$password_again = $_POST['password_again'];
		$contact =$_POST['contact'];
		$city=$_POST['city'];

				if ($password!=$password_again)
				 {
					 echo 'password do not match.';
	        	 }
	        else
	        { 
		        
			     $query = "select * from manager where name = '$name'";
			     $query_run = mysql_query($query);

			     if (mysql_num_rows($query_run)==1)
			      {
			     	echo 'the name '.$name.' already exists.';
			      }
			     else
			     {
				     	$query = "insert into manager(name,password,contact,city) values('$name','$password','$contact','$city')";

				     	if($query_run = mysql_query($query))
				     	{
				     		?>
				     		<script type="text/javascript">
				     			alert("you're registered successfully, please log in..")
				     			window.location="mglog.php";
				     		</script>
				     		<?php

				        }
					     else
					     {
					     	echo 'sorry  again later';
					     }
				 }
		    }
		
	
}
?>

<form accept="mgreg.php" method="POST">
	<h1>Sign Up</h1>
	 <p>Please fill in this form to create an account.</p>

	name:<br> <input type="text" name="name" required=""><br>
	password:<br> <input type="password" name="password" required=""><br>
	password again:<br> <input type="password" name="password_again" required=""><br>
	contact:<br> <input type="text" name="contact" required=""><br>
	city:<br> <input type="text" name="city" required=""><br>


     <div class="clearfix">
      
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>

</form>

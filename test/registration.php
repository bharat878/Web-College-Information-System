<!doctype html>
<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1">



		<link  rel="stylesheet" type="text/css" href="css\registration.css">

	
	
	<link rel="icon" type="image/png" href="images/man-reading.png"/>
</head>


<body>
    
	<div id="container">

<ul>
	  <li><a class="active" href="clickOcollege.html">Home</a></li>
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




	if (isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['password_again'])&&isset($_POST['firstname'])&&isset($_POST['surname'])&&isset($_POST['gender'])&&isset($_POST['email'])&&isset($_POST['city'])&&isset($_POST['contact']))
	{
		$username =$_POST['username'];
		$password =$_POST['password'];
		$password_again = $_POST['password_again'];
		$firstname =$_POST['firstname'];
		$surname=$_POST['surname'];
		$gender=$_POST['gender'];
		$email=$_POST['email'];
		$city=$_POST['city'];
		$contact=$_POST['contact'];

		
				if ($password!=$password_again)
				 {
					 echo 'password do not match.';
	        	 }
	        else
	        { 
		        
			     $query = "select * from users where username = '$username'";
			     $query_run = mysql_query($query);

			     if (mysql_num_rows($query_run)==1)
			      {
			     	echo 'the username '.$username.' already exists.';
			      }
			     else
			     {
				     	$query = "insert into users(username,password,firstname,surname,gender,email,city,contact) values('$username','$password','$firstname','$surname','$gender','$email','$city','$contact')";

				     	if($query_run = mysql_query($query))
				     	{
				     	
				     	?>
				     	<script type="text/javascript">
				     		alert("you're registered successfully, please login");
				     		window.location="clickOcollege.html"
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

<form accept="registraton.php" method="POST">
	<h1>Sign Up</h1>
	 <p>Please fill in this form to create an account.</p>

	username:<br> <input type="text" name="username" required=""><br>
	password:<br> <input type="password" name="password" required=""><br>
	password again:<br> <input type="password" name="password_again" required=""><br>
	first name:<br> <input type="text" name="firstname" required=""><br>
	surname:<br> <input type="text" name="surname" required=""><br>


			gender:<select name="gender" required="">
			  <option value="M">Male</option>
			  <option value="F">Female</option>
			</select>
			  <br>
	email:<br> <input type="text" name="email" required=""><br>
	city:<br> <input type="text" name="city" required=""><br>
	contact:<br> <input type="text" name="contact" required=""><br>



     <div class="clearfix">
     
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>

</form>
</html>


<!doctype html>
<html>
	<head><title>clickOcollege</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link  rel="stylesheet" type="text/css" href="css/registration.css">
	<link rel="icon" type="image/png" href="images/man-reading.png"/>

	
<style>

#title{
	margin-left: 480px;
	color: blue;



}


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
	  <li><a href="mglog.php">Login</a></li>
	  <li><a href="mgreg.php">Signup</a></li>
	  <li><a href="logout.php">logout</a></li>
	  
	</ul>
	    
    </div>

	</div>



	<script>
		function Check_Receipt()
		{
			len_file=clgregistration.clgimg.value.length;
				if(clgregistration.clgimg.value == '')
				{
					alert('Please choose a file to upload');
					clgregistration.clgimg.focus();
					return false;
				}
				else
				{
					var path= document.getElementById('clgimgpath').value;
				
					clgregistration.path.value= path; 
					dot_pos=clgregistration.clgimg.value.lastIndexOf('.');
					dot_pos1=len_file - dot_pos -1;
					ext=clgregistration.clgimg.value.substring(dot_pos+1,len_file); 
					ext=ext.toLowerCase();
					clgregistration.ext_file.value=ext; 
					if(!(ext=='gif'|| ext=='jpg' || ext=='png' || ext=='jpeg' )) 
					{
						alert('Please choose image files');
						return false;
					}
				}
		}
	</script>
	
</head>

<?php

include("dbconnect.php");
session_start();



if(isset($_SESSION['name']))
{
	$username=$_SESSION['name'];

	 $query="select name from manager where name='$username'";
	 
	$query_get_user = mysql_query($query);
	
	$row = mysql_fetch_assoc($query_get_user);
	$name= $row['name'];

	if ($name==$username) {
		

		echo "welcome to $name";

	



?>


<form name="clgregistration" action="colprocess.php" method="POST" onsubmit='return Check_Receipt()' enctype='multipart/form-data'>
	<h1>FILL THE COLLEGE INFORMATION</h1>
	 

	clg_id:<br> <input type="text" name="clg_id" required=""><br>
	name:<br> <input type="text" name="name" required=" "><br>
	branches:<br> <input type="text" name="branches" required=" "><br>
	city:<br> <input type="text" name="city" required=" "><br>
	manager:<br> <input type="text" name="manager" required=" "><br>
	fees:<br> <input type="text" name="fees" required=" "><br>
	seats:<br> <input type="text" name="seats" required=" "><br>
	placement_record:<br> <input type="text" name="placement_record"  required=""><br>
	address:<br> <input type="text" name="address" required=" "><br>
	contact:<br> <input type="text" name="contact" required=" "><br>
	myfile:<br> <input type="file" accept="image/*" name="clgimg" id='clgimgpath' required="">
	<input type='hidden' name='ext_file' value='ext'/>
	<input type='hidden' name='path' value='path'/>


		
		

     <div class="clearfix">
     
      <button type="submit" class="signupbtn">Register</button>
    </div>

</form>

</html>

<?php
	}
}
	else
	{
		echo "you are not authorized";



}
?>
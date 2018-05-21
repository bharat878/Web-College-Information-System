
<!doctype html>
<html>
	<head><title>clickOcollege</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link  rel="stylesheet" type="text/css" href="css/delhi.css">
	
		<link rel="icon" type="image/png" href="images/man-reading.png"/>
		<style>
table {

    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
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
	  <div class="search-container">

	  	<form method='POST' action="search.php" >
		   <input type ="text" name ='name' placeholder="Search...">
		  <input type="submit" value="search"><!-- <i class="fa fa-search"></i>-->
		</form>
	</div>
	</ul>
	    
    </div>

	</div>


<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>clg_id</th>
      <th> Name</th>
      <th>branches</th>
      <th>city</th>
      <th>manager</th>
      <th>fees</th>
      <th>seats</th>
      <th>placement_record</th>
      <th>address</th>
      <th>contact</th>
    </tr>


	
<?php

include("dbconnect.php");

session_start();



if(isset($_SESSION['username']))
{
	$username=$_SESSION['username'];

	 $query="select username from users where username='$username'";
	 
	$query_get_user = mysql_query($query);
	
	$row = mysql_fetch_assoc($query_get_user);
	$name= $row['username'];

	if ($name==$username) {
		

		echo "welcome to $name";





if(isset($_POST['name']))
{
	$clg_name = $_POST['name'];

	$query="select name from college where name = '$clg_name'";
	$query_get_user = mysql_query($query);
	$row = mysql_fetch_assoc($query_get_user);
	$name = $row['name'];
	

if($clg_name==$name)
{
	
	$query="select * from college where name='$clg_name'";
	$query_get_user = mysql_query($query);
	$row = mysql_fetch_assoc($query_get_user);

					$clg_id = $row['clg_id'];
						$name = $row['name'];
						$branches = $row['branches'];
						$city = $row['city'];
						$manager = $row['manager'];
						$fees = $row['fees'];
						$seats = $row['seats'];
						$placement_record = $row['placement_record'];
						$address = $row['address'];
						$contact = $row['contact'];
						$clgimg  = $row['clgimg'];
						


						echo " <br>
						<br><br><img src =manager/uploads/$clgimg height='400' width='100%'>

								 <tr>
									<td>$clg_id</td>
									<td>$name</td>
									<td>$branches</td>
									<td>$city</td><br>
									<td>$manager</td>
									<td>$fees</td>
									<td>$seats</td>
									<td>$placement_record</td>
									<td>$address</td><br>
									<td>$contact</td>
									
									
								    </tr>";



}



}

			?>
</table>
</div>
<?php	
}

}else
{
	echo "log in first";
}
?>




<!doctype html>
<html>
	<head><title>clickOcollege</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link  rel="stylesheet" type="text/css" href="../css/delhi.css">
	<link rel="icon" type="image/png" href="../images/man-reading.png"/>
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
      
      <th>image</th>
      <th>update</th>
      <th>Delete</th>
    </tr>




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



$query="select * from college where city='delhi'";

$query_get_user = mysql_query($query);
					$numrows = mysql_num_rows($query_get_user);

					$c=0;
					for($c=1;$c<=$numrows;$c++)
					{
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
						$status	 = $row['status'];



						if($status==1)
						{

						echo "  <tr>
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
									<td><img src =uploads/$clgimg height='100' width='100'></td>
									<form action=update.php method=post>
									<td><input type=submit value=update></td>
									</form>

									<form action=delete.php method=post>
									<td><input type=submit   value=$clg_id name=clg_id></td>
									</form>
									
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
	echo "you've to login first to see the college information";?><br><br><?php
}

			

?>

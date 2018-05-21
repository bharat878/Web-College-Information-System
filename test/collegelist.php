<!doctype html>
<html>
	<head><title>clickOcollege</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link  rel="stylesheet" type="text/css" href="css/clickOcollege.css">
	<link rel= "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="icon" type="image/png" href="images/man-reading.png"/>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

     	<!--Include Angular Js Lib-->
    <script src="js/angular.min.js"></script>
    <!-- Angular JS module and controller files-->
    <script type="text/javascript" src="js/myapp.js"></script>
     <script type="text/javascript" src="js/myctrl.js"></script>



</head>


<body ng-app="myapp" ng-controller="myctrl">
    
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
	  <div class="search-container">

	  	<form method='POST' action="search.php" >
		   <input type ="text" name ='name' placeholder="Search...">
		  <input type="submit" value="search"><!-- <i class="fa fa-search"></i>-->
		</form>
	</div>
	</ul>
	    
    </div>
    	          <h2 class="text-center">all users</h2>
          <table class="table table-bordered">
            <tr>
                  <th>clg_id</th>
                  <th>name</th>
                  <th>branches</th>
                  <th>city</th>
                  <th>manager</th>
                  <th>fees</th>
                  <th>seats</th>
                  <th>placement_record</th>
                  <th>address</th>
                  <th>contact</th>
            </tr>
            <tbody ng-init="select();">
                  <tr ng-repeat="item in items">
                        <td>{{item.clg_id}}</td>
                        <td>{{item.name}}</td>
                        <td>{{item.branches}}</td>
                        <td>{{item.city}}</td>
                        <td>{{item.manager}}</td>
                        <td>{{item.fees}}</td>
                        <td>{{item.seats}}</td>
                        <td>{{item.placement_record}}</td>
                        <td>{{item.address}}</td>
                        <td>{{item.contact}}</td>
                  </tr>
            </tbody>
          </table>



	<div id="footer">
						<div id="left">
							<h3>NAVIGATION</h3>
							<ul>
								
								<a href="#">HOME</a><br>
								<a href="#">LOCATION</a><br>
								<a href="#">CONTACT</a><br>
								<a href="#">ABOUT</a><br>
								<a href="#">LOG IN</a><br>
								<a href="#">SIGN UP</a><br>
							</ul>
					
						</div>
						<div id="mleft">
							<h3>FOR MEMBERS</h3>
							<ul>
								<a href="admin/admin.php">ADMIN</a><br>
								<a href="manager/mglog.php">MANAGER</a><br>
								<a href="#">SIGN IN</a><br>
								<a href="#">NEWS</a><br>
							</ul>
						</div>

						<div id="mright">
							<h3>FOLLOW US</h3>
							<ul>
								<a href="#">FACEBOOK</a><br>
								<a href="#">GOOGLE</a><br>
								<a href="#">INSTAGRAM</a><br>
						
							</ul>
						</div>

							<div id="right">
							<h3>TOP SEARCH</h3>
							<ul>
								<a href="#">TOP UNIVERSITY</a><br>
								<a href="#">TOP COLLEGE</a><br>
								<a href="#">TOP SCHOLAR</a><br>
								<a href="#">TOP PLACEMENT</a><br>
						
							</ul>
						
					
					
					
						
					</div>
				


</body>


</html>
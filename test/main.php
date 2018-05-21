<?php

session_start();
if(isset($_SESSION['username']))
{
	
	  


}


else {
	

	header("location:logout.php");
		
}
?>	

<?php
include("dbconnect.php");

$clg_id=$_POST['clg_id'];

$query="Delete from college where clg_id='$clg_id'";


				     	if($query_run = mysql_query($query))
				     	{
							
							?>
								<script type="text/javascript">
									alert('college information is deleted');
									window.location="logout.php";
								</script>
							<?php
				     	 }
					     else
					     {
					     	echo 'sorry  again later';
					     
				         }
	        
		        
	?>



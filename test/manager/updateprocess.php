
<?php

include("dbconnect.php");







		$clg_id=$_POST['clg_id'];
		$name =$_POST['name'];
		$branches =$_POST['branches'];
		$city = $_POST['city'];
		$manager =$_POST['manager'];
		$fees=$_POST['fees'];
		$seats=$_POST['seats'];
		$placement_record=$_POST['placement_record'];
		$address=$_POST['address'];
		$contact=$_POST['contact'];
		$clgimg=$_FILES['clgimg']['name'];


	

		if($_FILES["clgimg"]["size"] != 0) 
		{
			 $_FILES;
			 $ext=$_POST['ext_file'];
			 $tmpName=$_FILES['clgimg']['tmp_name'];
			$no=rand(10,100000);
			echo $imagefile="$no."."$ext";
			 $com_path = "uploads/$imagefile";
			copy($tmpName,$com_path);

			
			
		}

			$query = "UPDATE  college SET  name='$name',branches='$branches', city='$city', manager='$manager' , fees='$fees' , seats='$seats' ,placement_record='$placement_record', address='$address', contact='$contact', clgimg='$clgimg' where clg_id='$clg_id'";

				     	if($query_run = mysql_query($query))
				     	{
									     			
							?>
								<script type="text/javascript">
									alert('college registration succesfully');
									window.location="logout.php";
								</script>
							<?php
				     	
				   

				        }
					     else
					     {
					     	echo 'sorry  again later';
					     
				         }
	        
		 
?>





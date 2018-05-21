<?php
if(isset($_POST['submit']))
{
	$f_name=$_FILES['myfile']['name'];
	$f_tmp=$_FILES['myfile']['tmp_name'];
	
	$f_size=$_FILES['myfile']['size'];
	$f_extension=explode('.', $f_name);
	$f_extension=strtolower(end($f_extension));
	$f_newfile=uniqid().'.'.$f_extension;
	$store="uploads/".$f_newfile;
	if($f_extension=='jpg'||$f_extension=='png'||$f_extension=='gif')
	{
		if ($f_size>=1000000)
		 {
			echo "max file should be 1MB";
		}
		else
			{
				if(move_uploaded_file($f_tmp, $store))
				{
					echo "uploaded";
				}			}
		}
}

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>

	<meta charset="utf-8">
</head>

<body>
	<form action="" method="post" enctype="multipart/form-data">
		<p><input type="file" name="myfile"></p>
		<p><input type="submit" value="Upload" name="submit"></p>
		</form>
	</body>
	</html>
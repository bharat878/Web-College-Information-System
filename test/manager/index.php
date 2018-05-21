<!Doctype html>
<html>
	<head>

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
				if(clgregistration.clgimg.value != '') 
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
<body>

	
			<div id='file_uploder'>
					<form name='clgregistration' action='processimage.php' method='post' onsubmit='return Check_Receipt()' enctype='multipart/form-data'>
						<center>
							<table cellspacing='3' cellpadding='10'>
								<tr>
									<td>
										<label class='label'>Upload recipt</label>
									</td>
									<td>
										<input type='file' name='clgimg' id='clgimgpath'/>
									</td>
								</tr>
								<tr>
									<td colspan='2' align='center'>
										<input type='hidden' name='ext_file' value='ext'/>
										<input type='hidden' name='path' value='path'/>
										<input type='submit' class='button_style' name='btnRecipt' id='btnRecipt' value='Upload Receipt'/>
									</td>
								</tr>
							</table>
						</center>
					</form>
				</div>
			
			
</body>
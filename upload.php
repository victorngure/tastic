<?php 
	
	include('DBconnect.php');
 
	if(!$connection)
	{
		die(mysqli_error());
	}
 
	
	if(isset($_POST['submit']))
	{
 
		$targetFolder = "uploads";
		$errorMsg = array();
		$successMsg = array();
 	if(isset($_FILES['image_upload-1']))
         {
		foreach($_FILES as $file => $fileArray)
		{
			
			if(!empty($fileArray['name']) && $fileArray['error'] == 0)
			{
				$getFileExtension = pathinfo($fileArray['name'], PATHINFO_EXTENSION);;
 
				if(($getFileExtension =='jpg') || ($getFileExtension =='jpeg') || ($getFileExtension =='png') || ($getFileExtension =='gif'))
				{
					if ($fileArray["size"] <= 5000000) 
					{
						$breakImgName = explode(".",$fileArray['name']);
						$imageOldNameWithOutExt = $breakImgName[0];
						$imageOldExt = $breakImgName[1];
 
						$newFileName = strtotime("now")."-".str_replace(" ","-",strtolower($imageOldNameWithOutExt)).".".$imageOldExt;
 
						
						$targetPath = $targetFolder."/".$newFileName;
						
 
						
						if (move_uploaded_file($fileArray["tmp_name"], $targetPath)) 
						{
							$qry = "INSERT INTO images (image, propertyId)
     						VALUES ('".$newFileName."', 2)";   						
							$rs  = mysqli_query($connection, $qry);
							printf("Last inserted record has id %d\n", mysqli_insert_id($connection));
 
 
							if($rs)
							{
								$successMsg[$file] = "Image is uploaded successfully";
							}
							else
							{
								$errorMsg[$file] = "Unable to save ".$file." file ";
							}
						}
						else
						{
							$errorMsg[$file] = "Unable to save ".$file." file ";		
						}
					} 
					else
					{
						$errorMsg[$file] = "Image size is too large in ".$file;
					}
 
				}
				else
				{
					$errorMsg[$file] = 'Only image file required in '.$file.' position';
				}	
			}
			
		}
	}
	 else
        {
            echo 'No file selected for upload';
        }
    }
?>
 
<!DOCTYPE html>
<html>
<head>
<title>how to upload multiple images in php and store in mysql database</title>
<link rel="stylesheet" href="style.css" type='text/css'>
</head>
<body>
	<div class="form-container">
 
	<?php 
		if(isset($successMsg) && !empty($successMsg))
		{
			echo "<div class='success-msg'>";
			foreach($successMsg as $sMsg)
			{
				echo $sMsg."<br>";
			}
			echo "</div>";
		}
	?>
 
 
	<?php 
		if(isset($errorMsg) && !empty($errorMsg))
		{
			echo "<div class='error-msg'>";
			foreach($errorMsg as $eMsg)
			{
				echo $eMsg."<br>";
			}
 
			echo "</div>";
		}
	?>
 
	<div class="add-more-cont"><a id="moreImg"><img src="img/add_icon.jpg">Add Image</a></div>
	<form name="uploadFile" action="" method="post" enctype="multipart/form-data" id="upload-form">
		<div class="input-files">
		<input type="file" name="image_upload-1">
		</div>
		<input type="submit" name="submit" value="submit">
	</form>
	
	</div>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			var id = 1;
			$("#moreImg").click(function(){
				var showId = ++id;
				if(showId <=10)
				{
					$(".input-files").append('<input type="file" name="image_upload-'+showId+'">');
				}
			});
		});
	</script>
</body>
</html>
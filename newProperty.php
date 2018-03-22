<?php
session_start();
?>
<?php
require('DBconnect.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['title']))
{
        // removes backslashes
    $title = stripslashes($_REQUEST['title']);
    $title = mysqli_real_escape_string($connection,$title); 

    $area = stripslashes($_REQUEST['area']);
    $area = mysqli_real_escape_string($connection,$area);

    $desc = stripslashes($_REQUEST['desc']);
    $desc = mysqli_real_escape_string($connection,$desc);

    $price = stripslashes($_REQUEST['price']);
    $price = mysqli_real_escape_string($connection,$price);

    $status = stripslashes($_REQUEST['status']);
    $status = mysqli_real_escape_string($connection,$status);

    $type = stripslashes($_REQUEST['type']);
    $type = mysqli_real_escape_string($connection,$type);

    $bedrooms = stripslashes($_REQUEST['bedrooms']);
    $bedrooms = mysqli_real_escape_string($connection,$bedrooms);

    $bathrooms = stripslashes($_REQUEST['bathrooms']);
    $bathrooms = mysqli_real_escape_string($connection,$bathrooms);

    $location = stripslashes($_REQUEST['location']);
    $location = mysqli_real_escape_string($connection,$location);

    $sublocation = stripslashes($_REQUEST['sublocation']);
    $sublocation = mysqli_real_escape_string($connection,$sublocation);

    $propertyVideo = stripslashes($_REQUEST['propertyVideo']);
    $propertyVideo = mysqli_real_escape_string($connection,$propertyVideo);

    $userId = $_SESSION['userId'];

        $query = "INSERT INTO `properties`(propertyTitle, propertyArea, propertyDescription, propertyPrice, propertyStatus, propertyType, bathrooms, bedrooms, propertyLocation, propertySublocation, agentId, propertyVideo)
        VALUES ('$title', '$area', '$desc', '$price', '$status', '$type', '$bedrooms', '$bathrooms', '$location', '$sublocation' ,'$userId', '$propertyVideo')";
        $result = mysqli_query($connection,$query) or die(mysqli_error($connection));
        $prpId= mysqli_insert_id($connection);
        $_SESSION['propertyId']= $prpId;
        if($result){
            echo "<div class='form'>
            <h3>Property registered successfully.</h3>";

            $targetFolder = "uploads";
        $errorMsg = array();
        $successMsg = array();
        if(!empty($_POST['check_list'])) 
        {
    $checked_count = count($_POST['check_list']);
    foreach($_POST['check_list'] as $selected)
        {
    echo "<p>".$selected ."</p>";
    $qry = "INSERT INTO property_features (feature, propertyId)
                            VALUES ('".$selected."', '".$prpId."')";                        
                            $rs  = mysqli_query($connection, $qry);

            }
        }

    if(isset($_FILES['image_upload-1']["name"]))
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
                            VALUES ('".$newFileName."', '".$prpId."')";                        
                            $rs  = mysqli_query($connection, $qry);
 
                            if($rs)
                            {
                                echo"Image is uploaded successfully";
                            }
                            else
                            {
                               echo "Unable to save ".$file." file ";
                            }
                             header("Location:contactDetails.php");
                        }
                        else
                        {
                            echo "Unable to save ".$file." file ";        
                        }
                    } 
                    else
                    {
                        echo "Image size is too large in ".$file;
                    }
 
                }
                else
                {
                   echo 'Only image file required in '.$file.' position';
                }   
            }
            
        }
    }
     else
        {
            echo 'No file selected for upload';
        }
    }
}
?>
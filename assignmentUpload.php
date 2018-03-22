 <?php
 include('auth.php');
require('variables.php');
if(isset($_SESSION['orderId']))
{
    $orderId = $_SESSION['orderId'];
if(isset($_FILES['image_upload-1']["name"]))
         {
        foreach($_FILES as $file => $fileArray)
        {
            
            if(!empty($fileArray['name']) && $fileArray['error'] == 0)
            {
                $getFileExtension = pathinfo($fileArray['name'], PATHINFO_EXTENSION);
 
                if(($getFileExtension =='docx') || ($getFileExtension =='odt') || ($getFileExtension =='pdf'))
                {
                    if ($fileArray["size"] <= 5000000) 
                    {
                         $targetFolder = "uploads";
                        $breakImgName = explode(".",$fileArray['name']);
                        $imageOldNameWithOutExt = $breakImgName[0];
                        $imageOldExt = $breakImgName[1];
 
                        $newFileName = strtotime("now")."-".str_replace(" ","-",strtolower($imageOldNameWithOutExt)).".".$imageOldExt;
 
                        
                        $targetPath = $targetFolder."/".$newFileName;
                        
 
                        
                        if (move_uploaded_file($fileArray["tmp_name"], $targetPath)) 
                        {
                            $qry = "INSERT INTO answerFiles (answerName, orderId)
                            VALUES ('".$newFileName."', '".$orderId."')";                        
                            $rs  = mysqli_query($connection, $qry);
                            else
                            {
                               echo "Unable to save ".$file." file ";
                            }
                             header("Location:index.php");
                        }
                        else
                        {
                            echo "Unable to save ".$file." file ";        
                        }
                    } 
                    else
                    {
                        echo "File too large. 5 MB Maximum";
                    }
 
                }
                else
                {
                   echo 'File type not allowed';
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